<!DOCTYPE html>

<html>
<head>
  <title>EDIT PROFILE</title>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

</head>
<body>
    
    <div  class="icon-bar" >
      <a href="main.php"><i class="fa fa-home fa-2x"></i>Home</a>
      <a class="active" href="profile.html"><i class="fa fa-user fa-2x"></i>Profile</a> 
      <a href="inbox.php"><i class="fa fa-comments fa-2x"></i>Inbox</a> 
      <a href="groups.php"><i class="fa fa-users fa-2x"></i>Groups</a>
      <a href="people.php"><i class="fa fa-user-plus fa-2x"></i>People</a>
      <a href="logout.php"><i class="fa fa-sign-out fa-2x"></i>Sign out</a> 
   </div>

   <a href="main.php"><h1 class="title titlebg">Study Group</h1></a>
    
    <div>
    <form action="profile.php">
      <img class="profileImage" src="avatar.png"/>
      <div class="ProfileBox">
      <h3>Name</h3>
      <input type="text" name="College" value="College"><br>
      <input type="text" name="Major" value="Major"><br>
      <a href="#"><button>Save</button></a>
      </div>
    </form>
    </div>

    <div class="skills">
    <h3>Skills</h3>
      
      <table>
          <tr>
            <th>Subject</th>
            <th>Strengths</th>
            <th>Weaknesses</th>
          </tr>
          <tr>
            <td>Subject 1</td>
            <td>Strength 1, Strength2, Strength 3, Strength 4, Strength 5</td>
            <td>Weakness 1, Weaknss2, Weakness 3, Weakness 4, Weakness 5</td>
          <tr>
            <td>Subject 2</td>
            <td>Strength 1, Strength2...</td>
            <td>Weakness 1, Weaknss2...</td>
          </tr>
        </table>

        <a href="editskills.php"><button>Edit Skills</button></a>
        </div>
    

</body>
</html>
