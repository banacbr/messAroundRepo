$(document).ready(function(){
    $("#migraineBlock").load('contentPages/migraineLog.html');
    $("#aboutBlock").load('contentPages/aboutPage.html');
    $("#logCardCollapse").on('show.bs.collapse', function(){
        //on clicking navbar, load the page programatically
        
       
    });
    $("#aboutCardCollapse").on('show.bs.collapse', function(){
        //on clicking navbar, load the page programatically
       
    });

   $("#formSubmitBtn").click(function(e){
        e.preventDefault();
        
        painVal = $("#painLevelList").val();
        pBtn = $("#photoSensitiveButton").is(':checked');
        nBtn = $("#nauseaButton").is(':checked');
        bvBtn = $("#blurredVisionButton").is(':checked');
        console.log(painVal.toString() + " " + pBtn.toString());
    });
});
