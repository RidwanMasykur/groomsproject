$(document).ready(()=>{
    $(".status-select").change(function(){
        const id = $(this).attr('data-id');
        const status = $(this).find(":selected").val();

        console.log(status);

        $.post("/api/editpesanan",{
            id:id,
            status:status,
        },(e)=>{
            // console.log(e);
        }).done((e)=>{
            // console.log(e);
        }).fail((e)=>{
            console.log(e.responseJSON.message);
        })
    })
})