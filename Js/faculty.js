function rotateDivClick() {
	let c = document.getElementsByClassName("faculty-item");
	for (let i = 0; i < c.length; i++)
		c[i].onclick = () => {
			rotateDiv(i, c[i].className);
		};
}
function getZ(n=1){
  switch(n){
    case 9:return 1.35; 
    case 10:return 1.35;
    case 11:return 1.37;
    case 12:return 1.4;
    case 13:return 1.42;
    case 14:return 1.45;
  }
  return 1.2;

}
function rotateDiv(i = 0, name = "faculty-item") {
	let c = document.getElementsByClassName(name);

	let r = document.body.clientWidth / 200;
	let s = (360 / c.length - 1);
	console.log(s);
	let q = s * (c.length / 4)+3;
	if (i == c.length) 
    i = 0;
  
	for (let j = 0; j < c.length; j++) {
		let x = r * Math.cos(q * 0.0174533) * 3.3;
		let z = r * Math.sin(q * 0.0174533) * getZ(c.length); //1.2;
		c[i].style["transform"] = `translateX(${x}em) translateZ(${z}em) `;
		q += s;
    c[i].style["z-index"] = c.length - j;
		i++;
		if (i == c.length) i = 0;
	}
}
window.onload = () => {
  if (document.body.clientWidth > 750){
    rotateDivClick();
    rotateDiv();
  }
};
