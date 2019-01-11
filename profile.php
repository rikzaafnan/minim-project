<?php require 'header.php';?>
<style>
  /* Style the tab */
.tab {
    overflow: hidden;
    border: 2px solid #5f9ea0;
    background-color: #f1f1f1;
    width: 1345px;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
    margin-left: 29%;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #BDB76B;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 17px 12px;
    border: 1px solid #ccc;
    border-top: none;
    height: 226px;
}
</style>
<body>
  <section class="pagecenter services wrapper">
  <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Visi</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Misi</button>
  
</div>

<div id="London" class="tabcontent">
  <h3 style="text-align: center;font-size: 22px;">Visi</h3><br>
  <p style="text-align: center;font-size: 22px;">Menjadi program Studi pendidikan Matematika yang unggul, kompetitif, dan profesional dalam bidang pendidikan, penelitian, dan pengembangan ilmu dan pembelajaran Matematika dengan mengintegrasikan, ke-Islaman, keilmuan, kemanusiaan dan ke-Indonesiaan pada tahn 2017</p>
</div>

<div id="Paris" class="tabcontent">
  <h3 style="text-align: center;font-size: 22px;">Misi</h3><br>
 <ul style="font-size: 22px;margin-left: 20px;text-align: left;">
   <li type="A">Menyelenggarakan pendidikan dan pembelajaran Matematika berbasis riset (research based learning),pembelajaran berbasis pemecahan masalah (problem based learning) dan pembelajaran kontekstual (contextual teaching&learning) dalam rangka penjaminan mutu (quality assurance);</li>
   <li type="A">Melaksanakan penelitian dalam rangka pengembangan keilmuan dan karya inovasi yang relevan dengan kebutuhan pendidikan dan pembelajaran matematika;
</li>
<li type="A">Mengembangkan komitmen dan budaya akademik bagi para civitas akademikal
</li>
<li type="A">Mengembangkan pengabdian,jejaring,dan kemitraan, dengan instansi pemerintah, satuan pendidikan, dan lembaga lainnya, baik nasional maupun internasional dalam pendidikan dan pembelajaran Matematika;</li>
<li type="A">Melaksanakan evaluasi berkelanjutan terhadap penyelenggaraan program studi dalam rangka menjawab kebutuhan stakeholdes.</li>
 </ul>
</div>
</section>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>
</body>
<?php require 'footer.php' ?>

