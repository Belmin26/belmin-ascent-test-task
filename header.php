<style>
 
 .container {
    max-width: 960px;
 }

 .container {
    --bs-gutter-x: 1rem;
    --bs-gutter-y: 0;
    width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-y) * .5);
    margin-right: auto;
    margin-left: auto;
 }

 *, ::after, ::before {
    box-sizing: border-box;
 }

 div {
    display: block;
 }

.blog-header {
    border-bottom: 1px solid #e5e5e5;
}

.lh-1 {
    line-height: 1!important;
}

.py-3 {
    padding-top: 1rem!important;
    padding-bottom: 1rem!important;
}

.blog-header-logo {
    font-family: "Playfair Display" Georgia, "Times New Roman";
    font-size: 2.25rem;
    text-decoration: underline;
}

.text-body-emphasis {
    --bs-text-opacity: 1;
    color: var(--bs-emphasis-color)!important;
}

a {
    text-decoration: underline;
}

.logo:hover {
    text-decoration: none;
}

a:-webkit-any-link {
    cursor: pointer;
}

.text-center {
    text-align: center!important;
}

.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-.5 * var(--bs-gutter-x));
    margin-left: calc(-.5 * var(--bs-gutter-x));
}

.lh-1 {
    line-height: 1.5rem!important;
}

.p-2 {
    padding: 0.5rem!important;
}
.link-secondary {
    color: RGBA(var(--bs-secondary-rgb,var(--bs-link-opacity,1)));
    -webkit-text-decoration-color: RGBA(var(--bs-secondary-rgb),var(--bs-link-underline-opacity,1));
    text-decoration-color: RGBA(var(--bs-secondary-rgb),var(--bs-link-underline-opacity,1));
}
a {
    color: rgba(var(--bs-link-color-rgb),var(--bs-link-opacity,1));
    text-decoration: underline;
}

#popup {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: white;
  padding: 20px;
  border: 1px solid black;
}

/* Close button styles */
#popup .popup-content button {
  float: right;
}

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container">
  <header class="blog-header lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-body-emphasis" href="index.php">Large</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="registration.php">Sign up</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="world.php">World</a>
      <a class="p-2 link-secondary" href="#">U.S.</a>
      <a class="p-2 link-secondary" href="#">Technology</a>
      <a class="p-2 link-secondary" href="#">Design</a>
      <a class="p-2 link-secondary" href="#">Culture</a>
      <a class="p-2 link-secondary" href="#">Business</a>
      <a class="p-2 link-secondary" href="#">Politics</a>
      <a class="p-2 link-secondary" href="#">Opinion</a>
      <a class="p-2 link-secondary" href="#">Science</a>
      <a class="p-2 link-secondary" href="#">Health</a>
      <a class="p-2 link-secondary" href="#">Style</a>
      <a class="p-2 link-secondary" href="#">Travel</a>
    </nav>
  </div>
</div>

<script>
    function openPopup() {
  document.getElementById("popup").style.display = "block";
}

function closePopup() {
  document.getElementById("popup").style.display = "none";
}
</script>