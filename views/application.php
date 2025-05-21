<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("Location: /job-portal/views/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Application Tracker</title>
</head>
<body>
  <h1>Job Application Tracker</h1>
  <table>
    <thead>
      <tr>
        <th>Position / Role</th>
        <th>City / Country</th>
        <th>Resume</th>
        <th>Location</th>
        <th>Salary</th>
        <th>Interview Stage</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><span class="tag" style="background-color:#bcd4f7">Designer</span></td>
        <td>Sydney, AUS</td>
        <td><a href="#" class="link">Resume 1</a></td>
        <td><span class="tag hybrid">Hybrid</span></td>
        <td>80,000 USD</td>
        <td><span class="stage applied"><span class="dot" style="color:#333"></span>Applied</span></td>
      </tr>
      <tr>
        <td><span class="tag" style="background-color:#b8e1f7">Designer</span></td>
        <td>Perth, AUS</td>
        <td><a href="#" class="link">Resume 2</a></td>
        <td><span class="tag remote">Remote</span></td>
        <td>85,000 USD</td>
        <td><span class="stage hr"><span class="dot" style="color:#333"></span>HR screening</span></td>
      </tr>
      <tr>
        <td><span class="tag" style="background-color:#f4c2d7">Designer</span></td>
        <td>Wellington, NZ</td>
        <td><a href="#" class="link">Resume 3</a></td>
        <td><span class="tag onsite">On-site</span></td>
        <td>72,000 USD</td>
        <td><span class="stage first"><span class="dot" style="color:#cc1466"></span>1st interview</span></td>
      </tr>
      <tr>
        <td><span class="tag" style="background-color:#d9ccf0">Designer</span></td>
        <td>Auckland, NZ</td>
        <td><a href="#" class="link">Resume 4</a></td>
        <td><span class="tag hybrid">Hybrid</span></td>
        <td>90,000 USD</td>
        <td><span class="stage final"><span class="dot" style="color:green"></span>Final interview</span></td>
      </tr>
      <tr>
        <td><span class="tag" style="background-color:#f9d0e7">Experience...</span></td>
        <td>Sydney, AUS</td>
        <td><a href="#" class="link">Resume 5</a></td>
        <td><span class="tag onsite">On-site</span></td>
        <td>82,000 USD</td>
        <td><span class="stage second"><span class="dot" style="color:#007bff"></span>2nd interview</span></td>
      </tr>
    </tbody>
  </table>
</body>
</html>
