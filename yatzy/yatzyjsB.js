var players = 1;
var playerInfo = new Array();
var playersTurn = 1;
var omgong = 0;
var kastOmgong = 1;
var totalPoang = new Array();
var upperPoang = 0;
var dicesRound = new Array();

function writeIn(el,text) {
	while (el.firstChild) {
	  el.removeChild(el.firstChild);
	}
	el.appendChild(document.createTextNode(text));
}

function init() {
	
	//define-reset
	players = 1;
	playerInfo = new Array();
	playersTurn = 1;
	omgong = 0;
	kastOmgong = 1;
	totalPoang = new Array();
	upperPoang = 0;
	dicesRound = new Array();


	players = prompt("Antal Spelare",1);
	
	
	// define playerInfo
	playerInfo = new Array(players,6);
	for (i = 1; i <= players ; i++) {
		playerInfo[i] = new Array();
		totalPoang[i] = 0;
		
		for (j = 1 ; j <= 15 ; j++) {
			writeIn(document.getElementById("x"+j+"_"+i),"");
		}
	}
	
	writeIn(document.getElementById("antalSpelare"), players);
	document.getElementById("start").value = "Spelet startad, Klicka igen för att starta om";
	
	writeIn(document.getElementById("summa1"),"");
	writeIn(document.getElementById("summa2"),"");
	writeIn(document.getElementById("summa3"),"");
	writeIn(document.getElementById("summa4"),"");
	
	writeIn(document.getElementById("bonus1"),"");
	writeIn(document.getElementById("bonus2"),"");
	writeIn(document.getElementById("bonus3"),"");
	writeIn(document.getElementById("bonus4"),"");
	
	writeIn(document.getElementById("total1"),"");
	writeIn(document.getElementById("total2"),"");
	writeIn(document.getElementById("total3"),"");
	writeIn(document.getElementById("total4"),"");
	
	writeIn(document.getElementById("kastOmgong"), "0");
	writeIn(document.getElementById("tur"), 1);
	
}

function throwDices() {
	if (document.getElementById("antalSpelare").first=="") return;
	if (omgong==3) return;
	for (i=0; i < 5; i++) {
		
		if (!document.getElementById("Lock"+(i+1)).checked||omgong==0) {
		
		
			dicesRound[i] = Math.round(5 * Math.random() + 1);
			document.getElementById("Dice"+(i+1)).src="yatzy-bilder/"+dicesRound[i]+".gif";
		}
	}
	omgong++;
}


function bokfor(type, player, element) {
	if (omgong == 0) return;
	if (playersTurn != player) return;
	if (playerInfo[player][type]!=undefined) return;
	
	var poang = 0;
	
	if (type >= 1 && type <= 6) {
		poang = calcPoangForEyes(type);
	}
	
	if (type==7) poang = calcPoangForPar(2);
	
	if (type==8) poang = calcPoangForTwoPar();
	
	if (type==9) poang = calcPoangForPar(3);
	if (type==10) poang = calcPoangForPar(4);
		
	if (type == 11) poang = calcPoangForStege(5);
	if (type == 12) poang = calcPoangForStege(6);
	
	if (type == 13) poang = calcPoangForKak();
	if (type == 14) poang = calcPoangForChans();
	
	if (type == 15) {
		if (calcPoangForPar(5)!=0) poang = 50;
	}
	
	totalPoang[player] += poang;
		
	playerInfo[player][type] = poang;
	writeIn(element, poang);
	
	for (i=0; i < 5; i++) {
		document.getElementById("Lock"+(i+1)).checked = false;
	}
	omgong = 0;
	writeIn(document.getElementById("kastOmgong"), kastOmgong);
	calcSum();
	
	playersTurn++;
	if (players==player) {
		if (kastOmgong==15) gameEnd();
		kastOmgong++;
		playersTurn = 1;
	}
	
	writeIn(document.getElementById("tur"), playersTurn);
}

function calcPoangForEyes(a) {
	var tempCount = 0;
	for (i=1; i <= 5; i++) {
		if (a == getTarning(i)) {
			tempCount++;
		}
	}
	return (tempCount * a);
}
function calcPoangForPar(a) {

	for (j = 6; j > 0; j--) {
		if (calcPoangForEyes(j)/j>=a) return (j * a);

	}
	return 0;
}

function calcPoangForTwoPar() {
	var tempCountPar = 0;
	var tempCount = 0;
	for (j = 6; j > 0; j--) {
		if (calcPoangForEyes(j)/j>=2&&tempCountPar<2) { 
			tempCountPar++;
			tempCount += (j * 2);
		}
	}
	if (tempCountPar==2) return tempCount;
	return 0;
}

function calcPoangForKak() {
	var tempCountPar = 0;
	var tempCount = 0;
	for (j = 6; j > 0; j--) {
		if (calcPoangForEyes(j)/j>=3&&tempCountPar==0) { 
			tempCountPar++;
			tempCount += (j * 3);
		} 
	}
	
	if (tempCountPar==0) return 0;
	
	for (j = 6; j > 0; j--) {
		if (tempCount/3!=j) {
			if (calcPoangForEyes(j)/j>=2&&tempCountPar==1) { 
				tempCountPar++;
				tempCount += (j * 2);
			}
		}
	}
	if (tempCountPar==2) return tempCount;
	return 0;
}
function calcPoangForStege(a) {
	dicesRound.sort();
	for (i=0; i < 5; i++) {
		if (dicesRound[i]!=a-i) return 0;
	}
	return getSum(a);
}

function calcPoangForChans() {
	var tempCount = 0
	for (i=1; i <= 5; i++) {
		tempCount += getTarning(i);
	}
	return tempCount;
}

function getSum(a) {
	var tempCount = 0;
	for (i = a; i > a-5; i-- ) {
		tempCount += i;
	}
	return tempCount;
}

function getTarning(tarning) {
	return dicesRound[tarning-1];
	
}

function calcSum() {
	var upperSum = 0;
	var bonus = 0;
	for (i = 1 ; i <= players ; i++) {
		if (playerInfo[i][1]!=undefined) upperSum += playerInfo[i][1];
		if (playerInfo[i][2]!=undefined) upperSum += playerInfo[i][2];
		if (playerInfo[i][3]!=undefined) upperSum += playerInfo[i][3];
		if (playerInfo[i][4]!=undefined) upperSum += playerInfo[i][4];
		if (playerInfo[i][5]!=undefined) upperSum += playerInfo[i][5];
		if (playerInfo[i][6]!=undefined) upperSum += playerInfo[i][6];

		writeIn(document.getElementById("summa"+i), upperSum);
		if (upperSum>=63) {
			writeIn(document.getElementById("bonus"+i), 50);
			bonus = 50;
		}
		
		writeIn(document.getElementById("total"+i), (totalPoang[i] + bonus));
		
		upperSum = 0;
		bonus = 0
	}
}

function gameEnd() {
	if (confirm("Spelet är slut! Vill du spela igen?")) {
		init();
	}
}