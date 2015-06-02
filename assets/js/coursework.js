      // parameters
      
      var width   = 1000;        // cloud width
      var height  = 500;        // cloud height
      var radius  = 200;        // cloud radius
        var tspeed  = .3;            // rotation speed
        var fillcolor = "#441144";
        var backcolor = "#FFFFFF"; 
        var strocolor = "#FDF9FB";
        
        // init
      var root = null;
      var tags = [];
          var mousex=width;
          var mousey=height+500;
        var mactive = false;
          var centerx = width/5;
          var centery = height/2;
          var focalLen = Math.min(width, height);
          var rotx = 0.05;
          var roty = 0.05;
          var ctx;
        
        // const
        var mousecorr = 0.03/radius * tspeed;
        var slowdown = 0.98;
        var thrshold = 0.001;
        var refresht = 20;

        // tag 
      function tag(px,py,pz,name) {
        this.stopped = false;

        this.cx = px;
        this.cy = py;
        this.cz = pz;
        this.dx = 0;
        this.dy = 0;

        this.scale = 1;
        this.alpha = .85;
        
                this.txt = name;
       }


            // tag position update
            function updateTags() {
                var a;
                var b;
                if( mactive ){
                    rotx = Math.min(Math.max((centery - mousey),-focalLen),focalLen); 
                    rotx *= mousecorr;
                    roty = Math.min(Math.max((mousex - centerx),-focalLen),focalLen);
                    roty *= mousecorr;
                } else {
                    roty *= slowdown;
                    rotx *= slowdown;
                }
                // if rot under threshold, skip motion calculations to free up the processor
                if( Math.abs(rotx) > thrshold || Math.abs(roty) > thrshold ){
                    var sx = Math.sin(rotx);
                    var cx = Math.cos(rotx);
                    var sy = Math.sin(roty);
                    var cy = Math.cos(roty);
                    var j;
                    for( j=0; j<tags.length; j++ ) {
                            var t = tags[j];
                            // rotation around x
                            var xy = cx * t.cy - sx * t.cz;
                            var xz = sx * t.cy + cx * t.cz;
                            
                            // rotation around y
                            var yz = cy * xz - sy * t.cx;
                            var yx = sy * xz + cy * t.cx;
                            
                            // scale
                            t.scale = focalLen / (focalLen + yz * radius);

                            // alpha
                            t.alpha = t.scale / 2;

                            // delta
                            t.dx = yx * t.scale * radius - t.cx;
                        t.dy = xy * t.scale * radius - t.cy;

                            // new 3D coordinates
                            t.cx = yx;
                            t.cy = xy;
                            t.cz = yz;
                            
                    }
                    tags.sort( tagscomp );
                    
                    
                    
                    // start redrawing
                    ctx.clearRect(0, 0, width, height);
                    for( j=0; j<tags.length; j++ ) {
                        var t = tags[j];
            var color = getColorFromGradient( fillcolor, backcolor, t.alpha );
            // new position and scale the object
                        ctx.save();
                        ctx.translate(centerx+t.dx,centery+t.dy);
                        ctx.scale(t.scale, t.scale);
            ctx.fillStyle = color;
                        ctx.font="20px Arial";
                        ctx.fillText(t.txt, 0, 0);
                        ctx.restore();
                    }
                }
            }
            
            // sort function
            function tagscomp(a,b) {
                return b.cz - a.cz;
            }
            
            function getColorFromGradient( color1, color2, perc ) {
                var r1 = parseInt(color1.substr(1,2),16);
                var g1 = parseInt(color1.substr(3,2),16);
                var b1 = parseInt(color1.substr(5,2),16);
                var r2 = parseInt(color2.substr(1,2),16);
                var g2 = parseInt(color2.substr(3,2),16);
                var b2 = parseInt(color2.substr(5,2),16);
                var r = ( perc * r1) + ( (1-perc) * r2 );
                var g = ( perc * g1 ) + ( (1-perc) * g2 );
                var b = ( perc * b1 ) + ( (1-perc) * b2 );
                r = Number(r.toFixed(0));
                g = Number(g.toFixed(0));
                b = Number(b.toFixed(0));
                var ret = "#"+r.toString(16)+g.toString(16)+b.toString(16);
                return ret;
            }

            // mouse events
            window.onmousemove = function (evt){ 
                mactive = true; 
                mousex = evt.pageX; 
                mousey = evt.pageY;
            }
            window.onmouseout = function (evt){ mactive = false; }
             
    
        // startup
      $(document).ready(function(){
        var canvas = document.getElementById("cvs");
        tag_names = ["Machine Learning",
                     "Artificial Intelligence",
                     "Quantum Computing",
                     "Advanced Programming",
                     "Compilers",
                     "Computer Networks",
                     "Computational Robotics",
                     "Introduction to Databases",
                     "Physics: Mechanics and E&M",
                     "Multivariable Calculus",
                     "Discrete Mathematics",
                     "Natural Language Processing",
                     "Introduction to Accounting and Finance",
                     "Macroeconomics",
                     "Microeconomics",
                     "Scientific Computation",
                     "Computational Linear Algebra",
                     "User Interface Design",
                     "Introduction to Statistics and Probability",
                     "General Chemistry",
                     "Introduction to Electrical Engineering",
                     "Calculus I-IV",
                     "Computer Vision",
                     "Financial Economics",
                     "Econometrics",
                     "Contemporary Civilizations",
                     "Harvard University",
                     "Advanced Scientific Computing",
                     "Bayesian Data Analysis ",
                     "Quantitative Analysis of Capital Markets",
                     "Seminar in Computational Science and Engineering",
                     "Parallel Programming",
                     "Advanced Computer Architecture ",
                     "Monte Carlo Methods and Stochastic Optimization"]
        var numtags = tag_names.length;       // no of cloud tags

        if (canvas.getContext) {
            canvas.setAttribute('width', width);
            canvas.setAttribute('height', height);
            ctx = canvas.getContext('2d');
    
            for (var i = 0; i < numtags; i++) {
                // uniform distribution in spheric coordinates
                        var phi = Math.acos(-1+(2*i+1)/numtags);
                        var theta = Math.sqrt(numtags*Math.PI)*phi;
                        // first calculation of x,y,z
                        var cx = Math.cos(theta)*Math.sin(phi);
                    var cy = Math.sin(theta)*Math.sin(phi);
                    var cz = Math.cos(phi);
              tags[i] = new tag(cx,cy,cz,tag_names[i]);
            }
          
            // start refreshing
            setInterval( updateTags, refresht);
        }
      });