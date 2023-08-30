<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<link rel="stylesheet"
 href="<?php echo base_url();?>styles/css/dashboardcss/dashboad1.css">
<link rel="stylesheet"
 href="<?php echo base_url();?>styles/css/dashboardcss/dashboad2.css">
</head>
<body>
    <header style="background-color: #161e31;">

<div class="logosec">
<div class="logo"></div>
<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
class="icn menuicn"
id="menuicn"
alt="menu-icon">
</div>

<div class="searchbar">
<input type="text"
placeholder="Search">
<div class="searchbtn">
<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
class="icn srchicn"
alt="search-icon">
</div>
</div>

<div class="message">
<a href="<?= base_url('Admin/logout') ?>" style="color:white">Logout</a>
<div class="">
<button style="background-color:#5500cb; border:none; padding:5px; border-radius:8px;"><?php echo $this->session->userdata('username');?></button>
</div>
</div>

</header>

<div class="main-container" style="background-color:#161e31;">
<div class="navcontainer">
<nav class="nav" style="background-color:#161e31;box-shadow:1px 2px 1px 5px white;">
<div class="nav-upper-options">
<div class="nav-option option1">
<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
class="nav-img"
alt="dashboard">
<h3> Dashboard</h3>
</div>

<div class="option2 nav-option">
<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
class="nav-img"
alt="articles">
<h3> Articles</h3>
</div>

<div class="nav-option option3">
<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
class="nav-img"
alt="report">
<h3> Report</h3>
</div>

<div class="nav-option option4">
<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
class="nav-img"
alt="institution">
<h3> Institution</h3>
</div>

<div class="nav-option option5">
<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
class="nav-img"
alt="blog">
<h3> Profile</h3>
</div>

<div class="nav-option option6">
<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
class="nav-img"
alt="settings">
<h3> Settings</h3>
</div>

<div class="nav-option logout">
<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
class="nav-img"
alt="logout">
<h3>Logout</h3>
</div>

</div>
</nav>
</div>
<div class="main">

<div class="searchbar2">
<input type="text"
name=""
id=""
placeholder="Search">
<div class="searchbtn" >
<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
class="icn srchicn"
alt="search-button">
</div>
</div>

<div class="box-container">

<div class="box box1">
<div class="text">
<h2 class="topic-heading">60.5k</h2>
<h2 class="topic">Article Views</h2>
</div>

<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
alt="Views">
</div>

<div class="box box2">
<div class="text">
<h2 class="topic-heading">150</h2>
<h2 class="topic">Likes</h2>
</div>

<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png"
alt="likes">
</div>

<div class="box box3">
<div class="text">
<h2 class="topic-heading">320</h2>
<h2 class="topic">Comments</h2>
</div>

<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
alt="comments">
</div>

<div class="box box4">
<div class="text">
<h2 class="topic-heading">70</h2>
<h2 class="topic">Published</h2>
</div>

<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">
</div>
</div>

<div class="report-container" style="background-color: #2d3250;">
<div class="report-header">
<h1 class="recent-Articles" style="color: orange;">Recent Articles</h1>
<button class="view" style="background-color: #d49526; color:black;">View All</button>
</div>

<div class="report-body">
<div class="report-topic-heading">
<h3 class="t-op">Article</h3>
<h3 class="t-op">Views</h3>
<h3 class="t-op">Comments</h3>
<h3 class="t-op">Status</h3>
</div>

<div class="items">
<div class="item1">
<h3 class="t-op-nextlvl">Article 73</h3>
<h3 class="t-op-nextlvl">2.9k</h3>
<h3 class="t-op-nextlvl">210</h3>
<h3 class="t-op-nextlvl label-tag">Published</h3>
</div>

<div class="item1">
<h3 class="t-op-nextlvl">Article 72</h3>
<h3 class="t-op-nextlvl">1.5k</h3>
<h3 class="t-op-nextlvl">360</h3>
<h3 class="t-op-nextlvl label-tag">Published</h3>
</div>

<div class="item1">
<h3 class="t-op-nextlvl">Article 71</h3>
<h3 class="t-op-nextlvl">1.1k</h3>
<h3 class="t-op-nextlvl">150</h3>
<h3 class="t-op-nextlvl label-tag">Published</h3>
</div>

<div class="item1">
<h3 class="t-op-nextlvl">Article 70</h3>
<h3 class="t-op-nextlvl">1.2k</h3>
<h3 class="t-op-nextlvl">420</h3>
<h3 class="t-op-nextlvl label-tag">Published</h3>
</div>

<div class="item1">
<h3 class="t-op-nextlvl">Article 69</h3>
<h3 class="t-op-nextlvl">2.6k</h3>
<h3 class="t-op-nextlvl">190</h3>
<h3 class="t-op-nextlvl label-tag">Published</h3>
</div>

<div class="item1">
<h3 class="t-op-nextlvl">Article 68</h3>
<h3 class="t-op-nextlvl">1.9k</h3>
<h3 class="t-op-nextlvl">390</h3>
<h3 class="t-op-nextlvl label-tag">Published</h3>
</div>

<div class="item1">
<h3 class="t-op-nextlvl">Article 67</h3>
<h3 class="t-op-nextlvl">1.2k</h3>
<h3 class="t-op-nextlvl">580</h3>
<h3 class="t-op-nextlvl label-tag">Published</h3>
</div>

<div class="item1">
<h3 class="t-op-nextlvl">Article 66</h3>
<h3 class="t-op-nextlvl">3.6k</h3>
<h3 class="t-op-nextlvl">160</h3>
<h3 class="t-op-nextlvl label-tag">Published</h3>
</div>

<div class="item1">
<h3 class="t-op-nextlvl">Article 65</h3>
<h3 class="t-op-nextlvl">1.3k</h3>
<h3 class="t-op-nextlvl">220</h3>
<h3 class="t-op-nextlvl label-tag">Published</h3>
</div>

</div>
</div>
</div>
</div>
</div>

<script>
 //java script   
let menuicn = document.querySelector(".menuicn");
let nav = document.querySelector(".navcontainer");
 
menuicn.addEventListener("click", () => {
    nav.classList.toggle("navclose");
})
</script>

</body>
</html>