const blogs = [
  {
    image: "images/act1.webp",
    tag: "Regular Projects",
    title: "Meritorious Program",
    link: "courses.html",
    text: "Aninitiative to build a generation with honestly,competence and humanitarian...",
  },
  {
    image: "images/act2.webp",
    tag: "Regular Projects",
    title: "Meritorious Program",
    link: "courses.html",
    text: "Aninitiative to build a generation with honestly,competence and humanitarian...",
  },
  {
    image: "images/act3.webp",
    tag: "Regular Projects",
    title: "Meritorious Program",
    link: "courses.html",
    text: "Aninitiative to build a generation with honestly,competence and humanitarian...",
  },
  {
    image: "images/act4.webp",
    tag: "Regular Projects",
    title: "Meritorious Program",
    link: "courses.html",
    text: "Aninitiative to build a generation with honestly,competence and humanitarian...",
  },
  {
    image: "images/act5.webp",
    tag: "Regular Projects",
    title: "Meritorious Program",
    link: "courses.html",
    text: "Aninitiative to build a generation with honestly,competence and humanitarian...",
  },
  {
    image: "images/act6.webp",
    tag: "Regular Projects",
    title: "Meritorious Program",
    link: "courses.html",
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
          <div class="course_title"><h3><a href="${blogs.link}">${blogs.title}</a></h3></div>
          <div class="course_text">${blogs.text}</div>
          							<div class="button button_1"><a href="#">See details<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
          <div class="course_footer d-flex align-items-center justify-content-start">
          </div>
        </div>
      </div>
    </div>
  `).join("");
