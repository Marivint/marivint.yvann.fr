import { gsap } from "gsap";

let elementCursor = document.getElementsByClassName("cursor");

function moveCursor(e){

  var render = function render() {
		gsap.set(elementCursor, {
		    x: e.clientX,
		    y: e.clientY
		});
  };
    
	requestAnimationFrame(render);
}

document.addEventListener("mousemove", function (e) {
    moveCursor(e);
});