function candidate_info(){
    var sel = document.getElementById('cand_sel');
    var sel_val =sel.value;
    var sel_text = sel.options[sel.selectedIndex].text;
    var about = document.getElementById("c_abt");
    var party = document.getElementById('c_party');
    var hid = document.getElementById('hid_party');
    // confirm("You selected  : "+sel_text);

    if(sel_val == "Candidate 1")
    {
        about.innerHTML= "This is candidate 1 ...";
        party.innerHTML = "Party 1";
    }
    else if(sel_val == "Candidate 2")
    {
        about.innerHTML= "This is candidate 2 ...";
        party.innerHTML = "Party 2";
    }    
    else if(sel_val == "Candidate 3")
    {
        about.innerHTML= "This is candidate  3...";
        party.innerHTML = "Party 3";
    }    
    else if(sel_val == "Candidate 4")
    {
        about.innerHTML= "This is candidate 4 ...";
        party.innerHTML = "Party 4";
    }    
    else if(sel_val == "Candidate 5")
    {
        about.innerHTML= "This is candidate  5 ...";
        party.innerHTML = "Party 5";
    }    
    else
    {
        about.innerHTML= "Please , Select a candidate !";
    }    

    hid.value = party.innerHTML;  

}