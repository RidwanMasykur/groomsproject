$(document).ready(()=>{
    $(".status-select").change(function(){
        const id = $(this).attr('data-id');
        const status = $(this).find(":selected").val();

        console.log(status);

        $.post("/api/editpesanan",{
            id:id,
            status:status,
        },(e)=>{

        }).done((e)=>{

        }).fail((e)=>{
            console.log(e.responseJSON.message);
        })
    })
})