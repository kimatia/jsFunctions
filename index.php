<!DOCTYPE html>
<html>
<head>
	<title>Javascript!</title>
</head>
<body>
<br><br>
<p id="text-area">Hello kims</p>
<p id="gameStart"></p>
<button id="new-game-button">New game</button>
<button id="hit-button">Hit</button>
<button id="stay-button">Stay</button>

<script type="text/javascript">
	//char length
	var nameLength="Kimatia Daniel";
	console.log(nameLength.length);
	//js functions
	function myStuff(first, middle, last, total){
		var result="";
		result=first + last;
	    return result;
	}
	console.log(myStuff("Kimatia"," joshua"," daniel"," Kimatia joshua daniel"));
	//calling function 1
	function myFunction(coolCow,pinpon){
		result=coolCow-pinpon;
		console.log(result);
	}
	myFunction(10,5);
	//calling function2
	function myFunction2(num){
		return num-3;
	}
	console.log(myFunction2(10));
	//global variables and functions
	var myGlobal="Alex";
	function func1(){
	var myGlobal="Alex";	
	console.log(myGlobal);
	}
	func1();
	function func2(){
	
      var output="";
      if(typeof myGlobal != "undefined"){
      	output+="Defined"; 
      }else{
      	output+="Undefined";
      }
      console.log(output);
	}
	func2();
	function array(arr,item){
		arr.push(item);
		return arr.shift();
	}
	var testArr=[1,2,3,4,5];
	console.log(array(testArr,6));
	//format an array in a way that can be printed on the screen
	console.log(JSON.stringify(testArr));
	//switch function
	function switchVal(val){
		var answer="";
		switch(val){
			 case 1:
			 answer="Dan";
			 break;
			 case 2:
			 answer="Michael";
			 break;
			 case 3:
			 answer="Alex";
			 break;
			 default:
			 answer="None";
			 break;
		}
		return answer;
	}
	console.log(switchVal(10));
	//boolean
	function boolean(firstNum,secondNum){
		if(firstNum<secondNum){
         return true;
		}else{
          return false;
		}
	}
	console.log(boolean(19,5));
	//arrays and lists
	var myPlants=[{
		type:"flowers",
		list:[
          "Rose",
          "mary"
		]
	},
    {
   type:"people",
		list:[
          "Dan",
          "Kim"
		]
    },
	]
	var combileName=myPlants[1].list[0];
	console.log(combileName);
	//array total
	var myArray=[1,3,5,6,7,8];
	var arrTotal=0;
	for (i=0;i<myArray.length;i++){
		arrTotal+=myArray[i];
	}
	console.log(arrTotal);
//nested for arrays
function multiplyArray(arr){
	var product=1;
     for(var i=0;i<arr.length;i++){
     	for(var j=0;j<arr[i].length;j++){
     		product*=arr[i][j];
     	}
     }
    
	return product;
}
var product=multiplyArray([[1,2],[3,4],[5,6,7]]);
console.log(product);
//check and find property in arrays
var contacts= [
{
	"firstName":"Kimatia",
	"lastName":"Daniel",
	"number":"254795511728",
	"likes":["walk","run","jog"]
},
{
	"firstName":"Joan",
	"lastName":"Nasimiyu",
	"number":"254795511729",
	"likes":["eat","walk","sleep"]
},
{
	"firstName":"Linda",
	"lastName":"Nyakasi",
	"number":"254795511727",
	"likes":["swim","run","read"]
},
{
	"firstName":"David",
	"lastName":"Situma",
	"number":"254795511726",
	"likes":["tattoo","wash","jog"]
}
]
function lookup(name,prop){
	for(i=0;i<contacts.length;i++){
		if(contacts[i].firstName===name){
			return contacts[i][prop] || "No such property";
		}
	}
	return "No such contact";
}
var data=lookup("David","lastName");
console.log(data);
//parseInt function converting from string to integer
function convertStringToInteger(str){
	return parseInt(str);
}
console.log(convertStringToInteger("45"));
//convert binary string to integer
function convertBinaryToInteger(str){
	//pass str in base 2(binary) instead of base 10
	return parseInt(str,2);
}
console.log(convertBinaryToInteger("10101"));
//freeze objects to prevent reassigning
function freezObj(){
	"use strict";
	const math_constant={
		PI:3.14
	}
	Object.freeze(math_constant);
	try{
math_constant.PI=885;
	}catch(ex){
console.log(ex);
	}
	return math_constant.PI;
}
const PI=freezObj();
console.log(PI);
//sum of array using es6
const sum = (function(){
	//converting every number that is passed in into an array
	return function sum(...args){
		return args.reduce((a,b)=>a+b,0);
	};
})();
console.log(sum(1,2,4,5));

//es6 array with filter then square
const realNumberArray=[3,5,6.5,8,-58,+87,2.45,9];
const squareList=(arr)=>{
	const squareIntegers=arr.filter(num=>Number.isInteger(num) && num>0).map(x=>x*x);
	return squareIntegers;
};
const squaredIntegers=squareList(realNumberArray);
console.log(squaredIntegers);
//array with spread operator
const arr1=["Dan","John","Carlos","James"];
let arr2;
(function(){
	arr2=[...arr1];
	arr1[0]="Kims"
})();
console.log(arr2);
//js destructuring
const AVG_TEMP={
	today:445,
	tomorrow:45
};
function getTempTomorrow(avgTemp){
	"use strict";
	const {tomorrow:tempKesho}=avgTemp;
	return tempKesho;
};
console.log(getTempTomorrow(AVG_TEMP));
//destructuring two times to get max value of objetc property
const AVG_TEMPS={
	today:{min:74,max:85},
	tomorrow:{min:65,max:78}
};
function getTempTomorroww(avgTempp){
	"use strict";
	const {tomorrow:{min:tempKesho}}=avgTempp;
	return tempKesho;
};
console.log(getTempTomorroww(AVG_TEMPS));
//extracting elements of arrays
const [x,y,z]=[4,5,8];
console.log(x,y);
let a=4,b=7;
(()=>{
	"use strict";
	[a,b]=[b,a];
})();
console.log("a = "+a);
console.log("b = "+b);
//destructuring constants with functions
const stats={
	max:78,
	min:14
};
const half=(function(){
return function half(stats){
	return(stats.max/stats.min);
};
})();
console.log(half(stats));
//template literals
const person={
	firstName:"Kims",
	secondName:"Daniel"
};
const greeting=`Hello ${person.firstName}`;
console.log(greeting);
//setters and getters
function makeClass(){
	class Thermostat{
		constructor(temp){
			this.temp=5/9*(temp-32);
		}
		get temperature(){
			return this._temp;
		}
		set temperature(updatedTemp){
			this._temp=updatedTemp;
		}
	}
	return Thermostat;
}
const Thermostat=makeClass();
const thermos=new Thermostat(45);
let temp=thermos.temperature;
thermos.temperature=14;
temp=thermos.temperature;
console.log(temp);
//interacting with elements of the dom

let textArea=document.getElementById('text-area');
let newGameButton=document.getElementById('new-game-button');
let hitButton=document.getElementById('hit-button');
let stayButton=document.getElementById('stay-button');
let startedGame=document.getElementById('gameStart');

//hide hit and stay button
hitButton.style.display='none';
stayButton.style.display='none';



//button click
let buttonClick=document.getElementById('new-game-button');
buttonClick.addEventListener('click', function(){
	textArea.innerText="Started...";
	newGameButton.style.display="none";
	hitButton.style.display='inline';
    stayButton.style.display='inline';
    gameStarted=true;
    showStatus();

});

function showStatus(){
	if(gameStarted==true){
		startedGame.innerText="Welcome to blackJack";
	}
}
</script>
</body>
</html>