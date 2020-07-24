<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>


    var arrSlide = [{image:"http://localhost:8080/beautie/Files/TopBanner/banner.gif",title:"",content:""}];
    arrSlide.slice(1);

    <?php foreach ($slideArray as $key => $value) :?>
        var slide = {image:"",title:"",content:""};
           slide.image ="<?php echo $value['topBannerImage'];?>";
           slide.title="<?php echo $value['title'];?>";
           slide.content="<?php echo $value['content'];?>";

           arrSlide.push(slide);
    <?php endforeach;?>

    var which = 0;
    function slideShow() {
        if(which == arrSlide.length -1)
        {which = -1;}

        which ++;
        document.getElementById("slide-image").src = arrSlide[which].image;
        document.getElementById('slide-title').innerHTML = arrSlide[which].title;
        document.getElementById('slide-content').innerHTML = arrSlide[which].content;
        
    }

    function slideShowPrev() {
        if(which < 0)
        {which = arrSlide.length }
        
        which --;
        document.getElementById("slide-image").src = arrSlide[which].image;
        document.getElementById('slide-title').innerHTML = arrSlide[which].title;
        document.getElementById('slide-content').innerHTML = arrSlide[which].content;
        
    }


</script> 