<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="jobs.css" />
    <title>JOBS</title>

    <style>
      input{


      }
      input[type=text] {
  width: 100%;
  height:50px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color:;
  color: white;
}
button {
  background-color: skyblue;
  border: none;
  color: white;
  margin left:20px;
  height: 50px;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius:2px;
}
    </style>
    <script>

      
document.addEventListener('DOMContentLoaded', function() {
    var link = document.getElementById('link');
    // onClick's logic below:
    link.addEventListener('click', function() {

        //there is no need to declare a new function here.

        var one = document.getElementById("input1").value;
        var two = 'https://www.google.com/search?q=' + encodeURIComponent(one);
        window.location = two;



    });
});
    </script>
  </head>
  <body>
    <header class="hero-section">
      <nav class="nav-bar">
        <h2 class="logo">JOB LIFT</h2>
      </nav>
      <div class="hero-text-section">
        <h1>JOBS AROUND YOU</h1>
        <p>Hire and Invest in highly skilled juniors now!</p>
       </div>
       <div class="text">
         <h1>It doesn’t make sense to hire smart people and tell them what to do; We hire smart people so they can tell us what to do</h1>
       </div>
       <form action="" method="POST"  target="www.google.com" >
       <div class="search-job text-center">
        <input type="text"   name="keywords"  class="form-control"  placeholder="search Keyword" style="" required>
        <button type="submit" name="keys_submit" value="Find Job">Find Job</button>
         <?php   
$base="jobs"; // Change base here 
$search_URL="http://www.google.com/search?q="; // Google Search Query URL  
if(isset($_POST['keys_submit']))
{ 
echo $keywords=$_POST['keywords'];
 header("location: ".$search_URL.$keywords.' '.$base );

}
?>
       </div>
      </form>
    </header>
    <div class="job-offers" style="display:inline;">

      <h1 >Newest Job Offers </h1>
      
      </div>
    <section class="jobs-section">
      <div class="job">
        <div class="job-title">
          <h2>Reactjs Developer</h2>
          <p>1 hours ago</p>
        </div>
        <div class="job-location">
          <h4>Vijayawada</h4>
          <p>India</p>
        </div>
        <div class="job-description">
          <p
            >I am looking for a Reactjs Developerr.<br />
            Project for public sector location.Vijayawada<br />
            (during the pandemic remote work)<br />
            60k Monthly
            <a href="https://www.naukri.com/job-listings-react-js-developer-persistent-systems-limited-nagpur-hyderabad-secunderabad-pune-bangalore-bengaluru-goa-4-to-6-years-300522002939?src=seo_srp&sid=165460387846644&xp=2&px=1" class="job-description">Apply Here</a></p
          >
        </div>
      </div>
      <div class="job">
        <div class="job-title">
          <h2>Junior Java Developer</h2>
          <p>2 hours ago</p>
        </div>
        <div class="job-location">
          <h4>Banglore</h4>
          <p>India</p>
        </div>
        <div class="job-description">
          <p
            >I am looking for a Junior Java Developer.<br />
            Project for public sector location.Banglore<br />
            (during the pandemic remote work)<br />
            80k Monthly
            <a href="https://www.naukri.com/job-listings-junior-java-developer-quadruple-automation-services-private-limited-pune-0-to-1-years-310522014731?src=seo_srp&sid=16546040216409273&xp=2&px=1" class="job-description">Apply Here</a></p
          >
        </div>
      </div>
      <div class="job">
        <div class="job-title">
          <h2>Javascript Developer</h2>
          <p>5 hours ago</p>
        </div>
        <div class="job-location">
          <h4>Vizag</h4>
          <p>India</p>
        </div>
        <div class="job-description">
          <p
            >I am looking for a Javascript Developer.<br />
            Project for public sector location.Vizag<br />
            (during the pandemic remote work)<br />
            Monthly 50k
            <a href="https://in.indeed.com/jobs?q=javascript%20developer&msclkid=07d4350638331de4965c5799797aa83f&utm_source=bing&utm_medium=cpc&utm_campaign=job_campaign_20150916_0_(exact)_(en)&utm_term=javascript%20developer%20job%20apply&utm_content=javascript%20developer&advn=8796132482198859&vjk=8360365fe1f4cd28" class="job-description">Apply Here</a></p
          >
        </div>
      </div>
    </section>
<!----------top recruiters---------->
<section id="recruiters">
    <div class="container text-center">
    <h3>TOP RECRUITERS</h3>
    </div>
    <img src="images/tw.png">
    <img src="images/ibm.png">
    <img src="images/amazon.png">
    <img src="images/microsoft.png">
    <img src="images/cisco.png">
    <img src="images/dell.png">
    <img src="images/infosys.png">
    <img src="images/fb.png">
    <img src="images/tcs.png">
    <img src="images/accenture.jpg">
    <img src="images/gp.png">
    <img src="images/wipro.png">
    <img src="images/cognizant.jpg">
    <img src="images/capgemini.jpg">
    <img src="images/samsung.jpg">
    <img src="images/phenom.jpg">
    <img src="images/panasonic.png">
    <img src="images/salesforce.png">
    <img src="images/sony.png">
    <img src="images/wm.png">
    <img src="images/apple.png">
    <img src="images/ptm.png">
    <img src="images/Mahindra.png">
    <img src="images/byjus.png">
    <img src="images/delo.png">
    <img src="images/ncr.jpg">
    
    </id=>
  </section>

  </section>

  <section id="JOB CATEGORIES:">
<div class="container text-center">
    <body>
      <div class="col_1">
        <br><h1 style="text-align:center">JOB CATEGORIES:</h1>
  
        <ul class="list_1">
          <br><p align="center"><a href="generic.html">Generic Jobs</a></p>
          <p align="center"><br><a href="system.html">System Jobs</a></p>
          <p align="center"><br><a href="product.html">Product Jobs</a></p>
          <p align="center"><br><a href="data.html">Data Jobs</a></p>
          <p align="center"><br><a href="operations.html">Operations Jobs</a></p>
          <p align="center"><br><a href="quality.html">Quality Jobs</a></p>
          <p align="center"><br><a href="solutions.html">Solutions Jobs</a></p>
          <p align="center"><br><a href="security.html">Security Jobs</a></p>

</section>

<section id="Todays jobs" >
  <div class="container text-center">
    <body>
      <div class="col_1">
        <br><h1 style="text-align:center">Todays Jobs</h1>
        
        <ul class="list_1">
          <br><p align="center"><a href="https://ww2.health.wa.gov.au/">Department of Health - Western Australia</a></p>
          <p align="center"><br> <a href="https://nursing-agencies-list.com/nursing_in_australia.asp">Australian Nursing Agency currently require experiences</a>	</p>
          <p align="center"><br><a href="https://www.expatica.com/ru/healthcare/healthcare-basics/healthcare-in-russia-104030/">Russia Nursing Agency currently require experiences</a></p>
          <p align="center"><br><a href="https://www.expatica.com/sa/living/gov-law-admin/the-government-and-political-system-in-saudi-arabia-71927/">The Government of Western Saudi Arbia</a>	</p>	
          <p align="center"><br><a href="https://ww2.health.wa.gov.au/">Department of Health - Western Australia</a></p>
          <p align="center"><br><a href="https://spc.kau.edu.sa/Default-320-EN">The Scientific Publishing Services in Saudi Arbia</a>	</p>
          <p align="center"><br><a href="https://www.canadacompanyregistry.com/catagory/BPO/">BPO Private Limited in Canada</a>	</p>	
          <p align="center"><br> <a href="https://www.eta.in/">Executive Tracks Associates in Pakistan</a></p>
          <p align="center"><br><a href="https://www.pyramidci.com/">Pyramid IT Consulting Pvt. Ltd. in Pakistan</a></p>					
        </ul>
      </div>
    </body>
  </div>
</section>
</body>
</html>
  
 