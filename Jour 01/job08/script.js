function sommenombrespremiers(nbr1, nbr2){
    var pr = 0;
    for(var i = 2; i < nbr1; i++){
        if(nbr1%i == 0)
        {
            pr++;
        }
    }
    for(var i = 2; i < nbr2; i++){
        if(nbr2%i == 0)
        {
            pr++;
        }
    }
    if (pr == 0)
    {
        var total = nbr1 + nbr2;
        return total;
    }
    else
    {
        return false
    }

}

console.log(sommenombrespremiers(2,3));