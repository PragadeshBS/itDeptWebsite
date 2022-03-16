function rotateDivClick() {
	let c = document.getElementsByClassName("faculty-item");
	for (let i = 0; i < c.length; i++)
		c[i].onclick = () => {
			rotateDiv(i, c[i].className);
		};
}
function getZ(n = 1) {
	switch (n) {
		case 9:
			return 1.35;
		case 10:
			return 1.35;
		case 11:
			return 1.37;
		case 12:
			return 1.4;
		case 13:
			return 1.42;
		case 14:
			return 1.45;
	}
	return 1.2;
}
function rotateDiv(i = 0, name = "faculty-item") {
	let c = document.getElementsByClassName(name);

	let r = document.body.clientWidth / 180;
	r = r > 6 ? 6 : r;
	let s = 360 / c.length - 1;
	console.log(s);
	let q = s * (c.length / 4) + c.length / 2;
	if (i == c.length) i = 0;

	for (let j = 0; j < c.length; j++) {
		let x = r * Math.cos(0.0174533 * (j == c.length - 1 ? q + 7 : q)) * 3.3;
		let z = r * Math.sin(q * 0.0174533) * getZ(c.length); //1.2;
		c[i].style["transform"] = `translateX(${x}em) translateZ(${z}em) `;
		q += s;
		c[i].style["z-index"] = c.length - j;
		i++;
		if (i == c.length) i = 0;
	}
}
var columns = [
	"qualification",
	"qualification",
	"qualification",
	"qualification",
	"qualification",
	"qualification",
	"qualification",
	"qualification",
	"qualification",
];
function generateList() {
	document.getElementById("list").innerHTML = "";
	for (let i = 0; i < columns.length; i++) {
		let inp = document.createElement("input");
		inp.setAttribute("type", "radio");
		inp.id = columns[i];
		inp.name = "list";
		let l = document.createElement("label");
		l.setAttribute("for", columns[i]);
		l.classList = "faculty-item";
		l.innerText = columns[i];
		document.getElementById("list").appendChild(inp);
		document.getElementById("list").appendChild(l);
	}
}
function initData(d) {
	document.getElementById("name").innerHTML = d.name;
	document.getElementById("designation").innerHTML = d.designation;
	document.getElementById("email").innerHTML = d.emailID;
	document.getElementById("area").innerHTML = d.AOS;
	document.getElementById("phone").innerHTML = d.emailID;
	document.getElementById("personalSite").innerHTML = d.personalSiteLink;
	document.getElementById("acoeSite").innerHTML = d.acoeSiteLink;
	//columns = d.details.split("#");
	generateList();
}
$(
	$.ajax({
		type: "POST",
		url: "./PHP/getFaculty.php",
		data: {
			fid: ID,
		},
		complete: (r) => {
			try {
				let d = JSON.parse(r.responseText);
				initData(d);
			} catch (e) {
				console.log("Faculty Not Found");
			}
		},
	})
);
window.onload = () => {	
	if (document.body.clientWidth > 750) {
		rotateDivClick();
		rotateDiv();
	}
};
