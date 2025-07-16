<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Roshan B | Portfolio</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
<style>
body {
    font-family: 'Inter', sans-serif;
    margin: 0;
    background: #f3f4f6;
    color: #1f2937;
}
header {
    background: #111827;
    color: #fff;
    text-align: center;
    padding: 1rem;
}
nav a {
    color: #fff;
    margin: 0 1rem;
    text-decoration: none;
    font-weight: 600;
}
nav a:hover {
    text-decoration: underline;
}
.hero {
    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
        url('https://images.unsplash.com/photo-1605902711622-cfb43c4437d5?auto=format&fit=crop&w=1500&q=80') center/cover no-repeat;
    text-align: center;
    padding: 4rem 2rem;
    color: white;
}
.hero img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 4px solid #fff;
    margin-bottom: 1rem;
}
.section {
    max-width: 1000px;
    margin: 2rem auto;
    padding: 2rem;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}
.section h2 {
    text-align: center;
    color: #4338ca;
    margin-bottom: 1rem;
}
.skills, .projects {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
}
.card {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    background: #f9fafb;
    transition: transform 0.3s ease;
}
.card:hover {
    transform: translateY(-5px);
}
.card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    display: block;
}
.card-content {
    padding: 1rem;
    background: white;
}
form input, form textarea {
    width: 100%;
    padding: 0.75rem;
    margin: 0.5rem 0;
    border: 1px solid #d1d5db;
    border-radius: 4px;
}
form button {
    background: #4338ca;
    color: white;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
form button:hover {
    background: #3730a3;
}
footer {
    background: #111827;
    color: white;
    text-align: center;
    padding: 1rem;
    margin-top: 2rem;
}
</style>
</head>
<body>

<header>
  <h1>Roshan B</h1>
  <nav>
    <a href="#about">About</a>
    <a href="#skills">Skills</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
  </nav>
</header>

<section class="hero">
  <img src="https://via.placeholder.com/150" alt="Profile Picture">
  <h2>Hi, I'm Roshan B</h2>
  <p>Full-Stack Developer | PHP | JavaScript | MySQL</p>
</section>

<section id="about" class="section">
  <h2>About Me</h2>
  <p>I am a Computer Science graduate passionate about web development. I specialize in building web applications using PHP, JavaScript, and MySQL. I love solving problems and creating projects that matter.</p>
</section>

<section id="skills" class="section">
  <h2>Skills</h2>
  <div class="skills">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1581276879432-15a06c5b2c88?auto=format&fit=crop&w=800&q=80" alt="HTML & CSS">
      <div class="card-content">
        <h3>HTML & CSS</h3>
        <p>Responsive Design, Flexbox, Grid</p>
      </div>
    </div>
    <div class="card">
      <img src="https://images.unsplash.com/photo-1581092334394-7ec0c39ba0d3?auto=format&fit=crop&w=800&q=80" alt="JavaScript">
      <div class="card-content">
        <h3>JavaScript</h3>
        <p>ES6+, DOM Manipulation, AJAX</p>
      </div>
    </div>
    <div class="card">
      <img src="https://images.unsplash.com/photo-1611078489935-7896b2f13684?auto=format&fit=crop&w=800&q=80" alt="PHP & MySQL">
      <div class="card-content">
        <h3>PHP & MySQL</h3>
        <p>Backend Development, Data Handling</p>
      </div>
    </div>
  </div>
</section>

<section id="projects" class="section">
  <h2>Projects</h2>
  <div class="projects">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=80" alt="Portfolio Website">
      <div class="card-content">
        <h3>Portfolio Website</h3>
        <p>Personal portfolio website built with PHP & MySQL.</p>
      </div>
    </div>
    <div class="card">
      <img src="https://images.unsplash.com/photo-1607082340929-2c33a1c1827c?auto=format&fit=crop&w=800&q=80" alt="Task Manager">
      <div class="card-content">
        <h3>Task Manager</h3>
        <p>A to-do list application with JavaScript and Local Storage.</p>
      </div>
    </div>
    <div class="card">
      <img src="https://images.unsplash.com/photo-1590608897129-79b0635b60b9?auto=format&fit=crop&w=800&q=80" alt="Weather App">
      <div class="card-content">
        <h3>Weather App</h3>
        <p>Real-time weather app using public APIs.</p>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="section">
  <h2>Contact Me</h2>
  <form method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
    <button type="submit">Send Message</button>
  </form>
</section>

<footer>
  <p>© <?= date('Y') ?> Roshan B | Built with PHP & MySQL</p>
</footer>

</body>
</html>
