<?php
include "header.php";

?>
<body>
<?php include "nav.php";?>

<div class="fillcon">
<div class="container">
    <form action= "<?php echo BASEURL; ?>/upload/upload" method="post" enctype="multipart/form-data">
        <h4>Personal Details</h4>

        <div class="row">
            <div class="col-md-2">
                <label>Name</label>
                <input type="text" class="col-md-2 form-control d-inline " pattern="[A-Za-z]{1,}[' ']{*}[A-Za-z]{*}" name="Name" placeholder="Name">
            </div>
            
            <div class="col-md-2">
                <label>Date of birth</label>
                <input type="date" class="col-md-2 form-control d-inline "  name="DOB" placeholder="DD-MM-YYYY">
            </div>
            <div class="col-md-2">
                <label>Photo</label>
            <input type="file" class="col-md-2 form-control d-inline " name="image">
            </div>
            <div class="col-md-2">
                <label>Email</label>
            <input type="email" class="col-md-2 form-control d-inline  " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="Email" placeholder="Email Id">
            </div>
            <div class="col-md-2">
                <label>Linkedin Profile</label>
            <input type="text" class="col-md-2 form-control d-inline  " name="Linkedin_Profile" placeholder="Linkedin Profile">
            </div>
        </div>
        
        <div class="main-form mt-3 border-bottom">
            <h4>School details</h4>
                <a href="javascript:void(0)" class=" btn btn-primary add-more-form-school">Add more</a>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group mb-3">
                        <label>School Name</label>
                        <input type="text" name="schoolname[]" class="form-control" pattern="[A-Za-z]{1,}"  placeholder="School name">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label>Stream</label>
                        <input type="text" name="Stream[]" class="form-control" pattern="[A-Za-z]{1,}"  placeholder="Stream">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label>Passing Year</label>
                        <input type="text" name="yop[]" class="form-control" pattern="[1-9]{1}[0-9]{3}" placeholder="Passing Year">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label>Marks</label>
                        <input type="text" name="school-marks[]" class="form-control"  placeholder="Marks">
                    </div>
                </div>
                
            </div>
        </div>
        <div class="paste-new-forms"></div>
        <div class="main-form-college mt-3 border-bottom">
            <h4>College details</h4>
                <a href="javascript:void(0)" class=" btn btn-primary add-more-form-college">Add more</a>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group mb-3">
                        <label>College Name</label>
                        <input type="text" name="collegename[]" class="form-control" pattern="[A-Za-z]{1,}" placeholder="School name">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label>Stream</label>
                        <input type="text" name="col-Stream[]" class="form-control" pattern="[A-Za-z]{1,}" placeholder="Stream">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label>Passing Year</label>
                        <input type="text" name="col-yop[]" class="form-control" pattern="[1-9]{1}[0-9]{3}" placeholder="Passing Year">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label>Marks</label>
                        <input type="text" name="col-marks[]" class="form-control" placeholder="Marks">
                    </div>
                </div>
            </div>
        </div>
        <div class="paste-new-forms-college"></div>

        <div class="main-form-project mt-3 border-bottom">
            <h4>Project completed</h4>
                <a href="javascript:void(0)" class=" btn btn-primary add-more-form-project">Add more</a>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group mb-3">
                        <label>Project Name</label>
                        <input type="text" name="proname[]" class="form-control" pattern="[A-Za-z]{1,}" placeholder="Project Name">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label>Description</label>
                        <input type="text" name="pro-des[]" class="form-control" pattern="[A-Za-z]{1,}" placeholder="Description">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-2">
                        <label>Completion Year</label>
                        <input type="text" name="yoc[]" class="form-control" pattern="[1-9]{1}[0-9]{3}" placeholder="Completion Year">
                    </div>
                </div>
            </div>
        </div>
        <div class="paste-new-forms-project"></div>

        <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="<?php echo BASEURL; ?>/profile/logout"><ul class = "my-2 my-lg-0 btn-danger btn">Log out</ul></a>

  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $(document).on('click','.remove-btn-school',function(){
                $(this).closest('.main-form').remove();
            }
            );
            $(document).on('click','.add-more-form-school', function(){
                $('.paste-new-forms').append('<div class="row main-form">\
                <div class="col-md-2">\
                    <div class="form-group mb-3">\
                        <label>School Name</label>\
                        <input type="text" name="schoolname[]" class="form-control" pattern="[A-Za-z]{1,}" required placeholder="School name">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <label>Stream</label>\
                        <input type="text" name="Stream[]" class="form-control" pattern="[A-Za-z]{1,}" required placeholder="Stream">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <label>Passing Year</label>\
                        <input type="text" name="yop[]" class="form-control" pattern="[1-9]{1}[0-9]{3}" required placeholder="Passing Year">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <label>Marks</label>\
                        <input type="text" name="school-marks[]" class="form-control" required placeholder="Marks">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <button class="remove-btn-school btn btn-danger">Remove</button>\
                    </div>\
                </div>\
            </div>');
            });
       
 
            $(document).on('click','.remove-btn-college',function(){
                $(this).closest('.main-form-college').remove();
            }
            );
            $(document).on('click','.add-more-form-college', function(){
                $('.paste-new-forms-college').append('<div class="row main-form-college">\
                <div class="col-md-2">\
                    <div class="form-group mb-3">\
                        <label>College Name</label>\
                        <input type="text" name="collegename[]" class="form-control" pattern="[A-Za-z]{1,}" required placeholder="College name">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <label>Stream</label>\
                        <input type="text" name="col-Stream[]" class="form-control" pattern="[A-Za-z]{1,}" required placeholder="Stream">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <label>Passing Year</label>\
                        <input type="text" name="col-yop[]" class="form-control" pattern="[1-9]{1}[0-9]{3}" required placeholder="Passing Year">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <label>Marks</label>\
                        <input type="text" name="col-marks[]" class="form-control" required placeholder="Marks">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <button class="remove-btn-college btn btn-danger">Remove</button>\
                    </div>\
                </div>')});

            $(document).on('click','.remove-btn-project',function(){
                $(this).closest('.main-form-project').remove();
            }
            );
            $(document).on('click','.add-more-form-project', function(){
                $('.paste-new-forms-project').append('<div class="row main-form-project">\
                <div class="col-md-2">\
                    <div class="form-group mb-3">\
                        <label>Project Name</label>\
                        <input type="text" name="proname[]" class="form-control" pattern="[A-Za-z]{1,}" required placeholder="Project Name">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <label>Description</label>\
                        <input type="text" name="pro-des[]" class="form-control" pattern="[A-Za-z]{1,}" required placeholder="Description">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <label>Completion Year</label>\
                        <input type="text" name="yoc[]" class="form-control" pattern="[1-9]{1}[0-9]{3}" required placeholder="Completion Year">\
                    </div>\
                </div>\
                <div class="col-md-2">\
                    <div class="form-group mb-2">\
                        <button class="remove-btn-project btn btn-danger">Remove</button>\
                    </div>\
                </div>\
            </div>')});
        });
    </script>
    


<?php
function set_url( $url )
{
    echo("<script>history.replaceState({},'','$url');</script>");
}
set_url("http://resume.com/Resume");
?>
</body>
</html>