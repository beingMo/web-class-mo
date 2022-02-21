function validateContactForm() {
    //reset flag
    //isValid = true;
    //reset error messages
    document.getElementById("rackCommentError").innerHTML = "";
    document.getElementById("benchCommentError").innerHTML = "";
    document.getElementById("firstNameError").innerHTML = "";
    document.getElementById("lastNameError").innerHTML = "";
    document.getElementById("emailError").innerHTML = "";
    document.getElementById("mainCommentError").innerHTML = "";
    var contactFormObject = document.getElementById("contactForm");
    var rackComment = contactFormObject.rackComment.value;
    var benchComment = contactFormObject.benchComment.value;
    var firstName = contactFormObject.firstName.value;
    var lastName = contactFormObject.lastName.value;
    var email = contactFormObject.email.value;
    var mainComment = contactFormObject.mainComment.value;
    var isValid;

    if (!validateName(firstName)) {
        document.getElementById("firstNameError").innerHTML = "Please provide a valid name.";
    }
    if (!validateName(lastName)) {
        document.getElementById("lastNameError").innerHTML = "Please provide a valid name."
    }
    
    if(!validateEmail(email)){
        document.getElementById("lastNameError").innerHTML = "Please provide a valid email."
    }
    /*
    if(!validateComment(rackComment)){
        
    };
    if(!validateComment(benchComment)){
        
    };
    if(!validateComment(mainComment)){
        
    };
    */
    
    if (isValid) {
        return true;
    } else {
        return false;
    }

    function validateName(name) {
        var correctFormat = name.search(/^\w+['-?]*\w+$/);

        console.log(correctFormat);

        if (correctFormat == -1) {
            return false;
        } else {
            return true;
        }
    }

    function validateEmail(emailAddress) {
        var correctFormat = emailAddress.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);

        console.log(correctFormat);

        if (correctFormat == -1) {
            return false;
        } else {
            return true;
        }
    }
    /*
    function validateComment(comment) {
        var correctFormat = comment.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);

        console.log(correctFormat);

        if (correctFormat == -1) {
            return false;
        } else {
            return true;
        }
    }
    */
}
