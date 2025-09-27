const blogs = [
  {
    image: "images/Financial Support For Madrasha Students.jpeg",
    tag: "Regular Projects",
    title: "Financial Support For Madrasha Students",
    link: "blog-details.php",
    text: "Financial Support For Madrasha Student with Scholarships for poor  talented students",
  },
  {
    image: "images/WhatsApp Image 2025-09-26 at 3.03.23 AM.jpeg",
    tag: "Regular Projects",
    title: "Meritorious Program",
    link: "blog-details.php",
    text: "Aninitiative to build a generation with honestly,competence and humanitarian...",
  },
  {
    image: "images/WhatsApp Image 2025-09-26 at 3.03.23 AM.jpeg",
    tag: "Regular Projects",
    title: "Meritorious Program",
    link: "blog-details.php",
    text: "Aninitiative to build a generation with honestly,competence and humanitarian...",
  },
  {
    image: "images/WhatsApp Image 2025-09-26 at 2.28.54 AM (4).jpeg",
    tag: "Regular Projects",
    title: "Meritorious Program",
    link: "blog-details.php",
    text: "Aninitiative to build a generation with honestly,competence and humanitarian...",
  },
  {
    image: "images/act5.webp",
    tag: "Regular Projects",
    title: "Meritorious Program",
    link: "blog-details.php",
    text: "Aninitiative to build a generation with honestly,competence and humanitarian...",
  },
  {
    image: "images/act6.webp",
    tag: "Regular Projects",
    title: "Meritorious Program",
    link: "blog-details.php",
    text: "Aninitiative to build a generation with honestly,competence and humanitarian...",
  },



];
  const container = document.getElementById("blogsContainer");

  container.innerHTML = blogs.map(blogs => `
    <div class="col-lg-4 col-md-6">
      <div class="course">
        <div class="course_image"><img src="${blogs.image}" alt=""></div>
        <div class="course_body">
          <div class="course_header d-flex flex-row align-items-center justify-content-start">
            <div class="activities_tag"><a href="#">${blogs.tag}</a></div>
          
          </div>
          <div class="course_title truncated-text"><h3><a href="${blogs.link}">${blogs.title}</a></h3></div>
          <div class="course_text">${blogs.text}</div>
          							<div class="button button_1"><a href="#">See details<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
          <div class="course_footer d-flex align-items-center justify-content-start">
          </div>
        </div>
      </div>
    </div>
  `).join("");
