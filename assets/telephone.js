$(document).ready( function() {
    var value = 0;
    var refreshInput;
    var numberMax;
    $("#telephone").bind('focus', function(event){
        $("#telephone").attr('value', '');
    });
    
    doublette('telephone')
    
    $("#telephone").bind('keyup', function(event){
     
       var target = $(event.target); numberMax = 14; 

            if(target.val().indexOf('+33(') >= 0){
                numberMax = 20;
            } else if((target.val().indexOf('+33')) >= 0){
                numberMax = 17;
            }

            if(target.val().length <= numberMax){
                value = target.val();
            } else if(target.val().length > numberMax){
                value = target.val().substring(0,numberMax);
                target.val(value);
            }    
            doublette('telephone');
       
    });       

});
  
function doublette(idTag){
    var num = $("#"+idTag).val();

    var plusTT=false;
    var zero=false;

    // enleve tous les caractères autre que les numériques et le +
    num=num.replace(/[^\d&^\+\(\)]/gi,"");

    if (!(num.length==1 && num.charAt(0)=='0'))
    {
        // supprime tous les 0 qui peuvent se trouver en début de numero
        while (num.charAt(0)=='0')   {
            num=num.substring(1);
        }
        // rajoute un 0 si le champ n'est pas vide et qu'il ne commence pas par +
        if (num.length>0 && num.charAt(0)!='+') 
            num='0'+num;
    }
    // si on a +33
    if (num.substring(0,3)=='+33') {
        plusTT=true;
    }
    // si on a tapez +330, on change en +33(0)
    if (num.substring(0,4)=='+330') {
        num='+33(0)'+num.substring(4);
    }
    // si on a +33(0)
    if (num.substring(0,6)=='+33(0)') {
        zero=true;
    }   

    // on commence la doublette
    var newnum='';
    var numalasuite=0;
    var parenthese = false;
   
    if (plusTT) numalasuite=-100; 
   
    for (var i=0;i<num.length-1;i++){
        // construction nouvelle chaine
        newnum=newnum+num.charAt(i);
 		
        // compte le nombre chiffre à la suite
        if (isNumeric(num.charAt(i)) || (num.charAt(i)=='+')) numalasuite++; else numalasuite=0;
 		
        //si entre parenthese, pas de doublette)
        if (num.charAt(i)=='(') parenthese = true;
        if (num.charAt(i)==')') parenthese = false;
 		
        // si +33, on rajoute un espace après premier chiffre
        if ((numalasuite>=1) && plusTT && zero && (i==6) && !parenthese) {
            newnum=newnum+' ';
            numalasuite=0;
        }
        if (plusTT && !zero && (i==3) && !parenthese) {
            newnum=newnum+' ';
            numalasuite=0;
        }
 		
        // si deux à la suite, on rajoute un espace
        if ((numalasuite>=2) && !parenthese) {
            newnum=newnum+' ';
            numalasuite=0;
        }
 		
        // si fermeture de parenthese, on rajoute un espace 
        if (num.charAt(i)==')') {
            newnum=newnum+' ';
        }
    }
    newnum=newnum+num.charAt(num.length-1);
 	
    num=newnum;

    $("#"+idTag).val(num);

}
 
function isNumeric(val) {
    return ((val.charCodeAt()>47) && (val.charCodeAt()<58));
}