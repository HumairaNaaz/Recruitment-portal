const jobs = [
  {
    title: "Assistant Professor",
    image: "images/software-engineer.svg",
    details:
      "Type: Permanent <br> Institution: Central University of Rajasthan <br>Specialization: Department of Health Sciences Medical Laboratory Technology <br>Minimum Qualification: Ph.D. <br>Experience Required: 0.00-0.00 Years <br>State: Rajasthan",
    openPositions: "1",
    link: "jobapply.php",
  },

  {
    title: "Associate Professor",
    image: "images/data-scientist.svg",
    details:
      "Type: Permanent <br> Institution: Central University of Rajasthan <br>Specialization: Department of Linguistics <br>Minimum Qualification: Ph.D. <br>Experience Required: 8.00-0.00 Years <br>State: Rajasthan",
    openPositions: "1",
    link: "jobapply.php",
  },

  {
    title: "Associate Professorr",
    image: "images/project-manager.svg",
    details:
      "Type: Permanent <br> Institution: Central University of Haryana <br>Specialization: Department of Linguistics <br>Minimum Qualification: Ph.D. <br>Experience Required: 8.00-0.00 Years <br>State: Haryana",
    openPositions: "1",
    link: "jobapply.php",
  },

  {
    title: "Software Programmer / Developer",
    image: "images/product-manager.svg",
    details:
      "Employment Type: Full Time, Permanent<br>Experience- 0 to 1 year (Freshers only) 2024 graduate can also apply<br>Role: Full Stack Developer<br>Pay: 5-7 Lacs P.A.",
    openPositions: "1",
    link: "jobapply.php",
  },

  {
    title: "Web/Application Developer",
    image: "images/manager.jpg",
    details:
      "Employment Type: Full Time, Permanent<br>Role Category: Software Development<br>Qualification:Any Graduate<br>Experience- 0 to 1 year<br>Pay:Not Disclosed",
    openPositions: "4",
    link: "jobapply.php",
  },

  {
    title: "Required Java Developer",
    image: "images/marketing-manager.svg",
    details:
      "Employment Type: Full Time, Permanent<br>Role: Full Stack Developer<br>Qualification:Any Graduate<br>Experience- 0 to 2 year<br>Pay:Not Disclosed",
    openPositions: "5",
    link: "jobapply.php",
  },
  
   {
    title: "Python Trainer & Developer",
    image: "images/marketing-manager.svg",
    details:
      "Employment Type: Full Time, Permanent<br>Role: Teaching & Training - Other<br>Qualification:B.Tech/B.E. in Computers, MCA in Computers, M.Tech in Computers<br>Experience- 0 - 5 years<br>Pay:8-10 Lacs P.A.",
    openPositions: "5",
    link: "jobapply.php",
  },
  
  {
    title: "Data Analyst",
    image: "images/marketing-manager.svg",
    details:
      "Employment Type: Full Time, Permanent<br>Role: Data Analyst<br>Qualification:Graduation Not Required<br>Experience- 0 to 2 year<br>Pay:20-35 Lacs P.A.",
    openPositions: "10",
    link: "jobapply.php",
  },
  
  {
    title: "Python + AI ML Libraries",
    image: "images/marketing-manager.svg",
    details:
      "Employment Type: Full Time, Permanent<br>Role: Data Engineer - Other<br>Qualification:B.Tech/B.E. in Any Specialization<br>Experience- 0 to 1 year<br>Pay:3-4 Lacs P.A.",
    openPositions: "1",
    link: "jobapply.php",
  },
];

const jobsHeading = document.querySelector(".jobs-list-container h2");
const jobsContainer = document.querySelector(".jobs-list-container .jobs");
const jobSearch = document.querySelector(".jobs-list-container .job-search");

let searchTerm = "";

//   if (jobs.length == 1) {
//     jobsHeading.innerHTML = ${jobs.length} Job;
//   } else {
//     jobsHeading.innerHTML = ${jobs.length} Jobs;
//   }

const createJobListingCards = () => {
  jobsContainer.innerHTML = "";

  jobs.forEach((job) => {
    if (job.title.toLowerCase().includes(searchTerm.toLowerCase())) {
      let jobCard = document.createElement("div");
      jobCard.classList.add("job");

      let image = document.createElement("img");
      image.src = job.image;

      let title = document.createElement("h3");
      title.innerHTML = job.title;
      title.classList.add("job-title");

      let details = document.createElement("div");
      details.innerHTML = job.details;
      details.classList.add("details");

      let detailsBtn = document.createElement("a");
      detailsBtn.href = job.link;
      detailsBtn.innerHTML = "Apply Job";
      detailsBtn.classList.add("details-btn");


      detailsBtn.addEventListener("click", function (){
          // console.log(title);
          let jobTittle = document.getElementById("job_title");
          console.log(jobTittle);
        });
        
      let openPositions = document.createElement("span");
      openPositions.classList.add("open-positions");

      if (job.openPositions == 1) {
        openPositions.innerHTML = `${job.openPositions} open position`;
      } else {
        openPositions.innerHTML = `${job.openPositions} open positions`;
      }

      jobCard.appendChild(image);
      jobCard.appendChild(title);
      jobCard.appendChild(details);
      jobCard.appendChild(detailsBtn);
      jobCard.appendChild(openPositions);

      jobsContainer.appendChild(jobCard);
    }
  });
};

createJobListingCards();

jobSearch.addEventListener("input", (e) => {
  searchTerm = e.target.value;

  createJobListingCards();
});