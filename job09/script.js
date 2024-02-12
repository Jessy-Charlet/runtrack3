
function tri(nbr){
    for(var a = 1 ; a <= max ; a++)
    {
        for(var b = 0; b <= nbr.length ; b++)
        {
        if(nbr[b] == a )
        {
            document.write(nbr[b] + "<br/>");
        }
    }
    }
}

var order = "asc";
var order = "desc"; 
var numbers = [42,587,54226,2321,1258,4236,9985,54458,95,1,22,301,542]
const max = Math.max(...numbers);

tri(numbers);