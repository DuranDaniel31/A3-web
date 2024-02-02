$(document).ready(function(){
    $('#table_data').DataTable()
});

function revome()
{
    if (confirm("Esta seguro de eliminar el registro?"))
    return true;
    
    else 

    return false;

}