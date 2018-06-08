var quotes = 
[
	'Codes at pag babasa na nga tinatamad na ko, mag mahal pa kaya - Norena',
	'Bigla na lang aalis at di mag paparamdam, marami akong kilalang ganyan. - Norena',	
	'Pag may bago na, kailangan tanggapin ang realidad - Norena'



]
function newQuote()
{
	var randomNumber = Math.floor(Math.random() * (quotes.length));
	document.getElementById('quoteDisplay').innerHTML = quotes[randomNumber];


}