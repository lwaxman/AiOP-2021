
var width, height, center, radius;
var points = 12;
var smooth = true;
var path = new Path();
path.fillColor = '#D72027';
initializePath();


// function initializePath() {
// 	center = view.center;
// 	width = view.size.width;
// 	height = view.size.height / 2;
// 	path.segments = [];
// 	path.add(view.bounds.bottomLeft);
// 	for (var i = 1; i < points; i++) {
// 		var point = new Point(width / points * i, center.y);
// 		path.add(point);
// 	}
// 	path.add(view.bounds.bottomRight);
// 	path.fullySelected = true;
// }


function initializePath() {
	center = view.center;
	width = view.size.width;
	height = view.size.height;
	radius = (width > height)? height*0.3 : width*0.3; 
	path.segments = [];

	for (var i = 0; i < points; i++) {

		var radians = (i*(360/points)) * (Math.PI/180);
		var xPos = center.x + (radius+(Math.random()*200))*Math.sin(radians);
		var yPos = center.y + (radius+(Math.random()*200))*Math.cos(radians);
		console.log(xPos, yPos);
		var point = new Point(xPos, yPos);
		path.add(point);
	}
	// path.fullySelected = true;
	path.closed = true;
	path.smooth({ type: 'continuous' });
}

// function onFrame(event) {
// 	// pathHeight += (center.y - mousePos.y - pathHeight) / 10;
// 	// for (var i = 1; i < points; i++) {
// 	// 	var sinSeed = event.count + (i + i % 10) * 100;
// 	// 	var sinHeight = Math.sin(sinSeed / 200) * pathHeight;
// 	// 	var yPos = Math.sin(sinSeed / 100) * sinHeight + height;
// 	// 	path.segments[i].point.y = yPos;
// 	// }
// 	// path.smooth({ type: 'continuous' });
// }

// function onResize(event) {
// 	initializePath();
// }

// var start = new Point(100, 100);

// // Move to start and draw a line from there
// path.moveTo(start);

// // Note the plus operator on Point objects.
// // PaperScript does that for us, and much more!
// path.lineTo(start + [ 100, -50 ]);

