	// Download form to validate if content of platform is supportcenter
	// or servicedesk

    function supportcenter() {
      document.getElementById("platform").innerHTML = ''; // replace content of platform id with empty string
      document.getElementById("servicedesk").style.display = "none"; // hide id servicedesk
    }

    function servicedesk() {
      document.getElementById("platform").innerHTML = ''; // replace content of platform id with empty string
      document.getElementById("supportcenter").style.display = "none"; // hide id supportcenter
    }

    function unspecified() {
      document.getElementById("supportcenter").style.display = "none"; // hide supportcenter id
      document.getElementById("servicedesk").style.display = "none"; // hide servicedesk id 
      document.getElementById("platform").innerHTML = "We're sorry, no file has been selected for this plugin.."; // prompt user with an error message
    }

    // if content of id platform is equal to <?php the_field('project_platform'); ?>
    // hide other id
    // else if, display other id
    // else prompt user with error message if neither of the
    // specified content are valid

    if (document.getElementById("platform").innerHTML === 'Supportcenter') {
      supportcenter();
    } else if (document.getElementById("platform").innerHTML === 'Servicedesk') {
      servicedesk();
    } else {
      unspecified();
    }
