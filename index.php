<?php require_once('db-connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduling</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script>
    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: Apple Chancery, cursive;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
        body{
    font-size: 16px;
    color: #6f6f6f;
    font-weight: 400;
    line-height: 28px;
    letter-spacing: 0.8px;
    margin-top:20px;
}
.font-size38 {
    font-size: 38px;
}
.team-single-text .section-heading h4,
.section-heading h5 {
    font-size: 36px
}

.team-single-text .section-heading.half {
    margin-bottom: 20px
}

@media screen and (max-width: 1199px) {
    .team-single-text .section-heading h4,
    .section-heading h5 {
        font-size: 32px
    }
    .team-single-text .section-heading.half {
        margin-bottom: 15px
    }
}

@media screen and (max-width: 991px) {
    .team-single-text .section-heading h4,
    .section-heading h5 {
        font-size: 28px
    }
    .team-single-text .section-heading.half {
        margin-bottom: 10px
    }
}

@media screen and (max-width: 767px) {
    .team-single-text .section-heading h4,
    .section-heading h5 {
        font-size: 24px
    }
}


.team-single-icons ul li {
    display: inline-block;
    border: 1px solid #02c2c7;
    border-radius: 50%;
    color: #86bc42;
    margin-right: 8px;
    margin-bottom: 5px;
    -webkit-transition-duration: .3s;
    transition-duration: .3s
}

.team-single-icons ul li a {
    color: #02c2c7;
    display: block;
    font-size: 14px;
    height: 25px;
    line-height: 26px;
    text-align: center;
    width: 25px
}

.team-single-icons ul li:hover {
    background: #02c2c7;
    border-color: #02c2c7
}

.team-single-icons ul li:hover a {
    color: #fff
}

.team-social-icon li {
    display: inline-block;
    margin-right: 5px
}

.team-social-icon li:last-child {
    margin-right: 0
}

.team-social-icon i {
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    font-size: 15px;
    border-radius: 50px
}

.padding-30px-all {
    padding: 30px;
}
.bg-light-gray {
    background-color: #f7f7f7;
}
.text-center {
    text-align: center!important;
}
img {
    max-width: 100%;
    height: auto;
}


.list-style9 {
    list-style: none;
    padding: 0
}

.list-style9 li {
    position: relative;
    padding: 0 0 15px 0;
    margin: 0 0 15px 0;
    border-bottom: 1px dashed rgba(0, 0, 0, 0.1)
}

.list-style9 li:last-child {
    border-bottom: none;
    padding-bottom: 0;
    margin-bottom: 0
}


.text-sky {
    color: #02c2c7
}

.text-orange {
    color: #e95601
}

.text-green {
    color: #5bbd2a
}

.text-yellow {
    color: #f0d001
}

.text-pink {
    color: #ff48a4
}

.text-purple {
    color: #9d60ff
}

.text-lightred {
    color: #ff5722
}

a.text-sky:hover {
    opacity: 0.8;
    color: #02c2c7
}

a.text-orange:hover {
    opacity: 0.8;
    color: #e95601
}

a.text-green:hover {
    opacity: 0.8;
    color: #5bbd2a
}

a.text-yellow:hover {
    opacity: 0.8;
    color: #f0d001
}

a.text-pink:hover {
    opacity: 0.8;
    color: #ff48a4
}

a.text-purple:hover {
    opacity: 0.8;
    color: #9d60ff
}

a.text-lightred:hover {
    opacity: 0.8;
    color: #ff5722
}

.custom-progress {
    height: 10px;
    border-radius: 50px;
    box-shadow: none;
    margin-bottom: 25px;
}
.progress {
    display: -ms-flexbox;
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: .75rem;
    background-color: #e9ecef;
    border-radius: .25rem;
}


.bg-sky {
    background-color: #02c2c7
}

.bg-orange {
    background-color: #e95601
}

.bg-green {
    background-color: #5bbd2a
}

.bg-yellow {
    background-color: #f0d001
}

.bg-pink {
    background-color: #ff48a4
}

.bg-purple {
    background-color: #9d60ff
}

.bg-lightred {
    background-color: #ff5722
}
    </style>
</head>

<body class="bg-light">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="data:image/png;base64,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" name="aboutme" width="140" height="140" class="img-circle"></a>
        <h3>Dr Mentor Name</h3>
        <em>click my face for more</em>
		</center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">More About MENTOR</h4>
                    </div>
                <div class="modal-body">
                    <center>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAe1BMVEUAAAD////19fX8/Pz4+PhlZWXx8fGenp7o6OjV1dXOzs7g4OB0dHTIyMhRUVHr6+tvb2+BgYFBQUG0tLSurq5LS0srKyuOjo4MDAyYmJgVFRU3NzdGRka9vb2goKDc3NwvLy9dXV0aGhqQkJBXV1eFhYV6enokJCQ7Ozu3pGFxAAAH7UlEQVR4nO2d2XbiOBBAFUxYzE7MFoJZkpD8/xdOPIRA25Is1WbLh3vOPE63bmNrqSqV1VPTUVUPgJ2HYfg8DMPnYUhEO06608VSXVgupt0kbsv81fyG7X06/FI6vobdfYv972c2bO+mB63dn+V0xyzJahg/r616vzyPOAfBZ9jZuNj9sumwjYPLsDfz8MuYDZhGwmM48fXLOE9YxsJi6PN83vPOMRgGw9ErUFCpV4Y5h9ywNQT7ZQzJpxxqwxj+A15Yx8QjIjZcIf0yiN9GUsPWkUBQqQ/SXQ6lYU+//fTnq0c4KkLDPpFfRp9uWHSGI0JBpeiWDTJDWkFCRSrDmFhQKapVg8iQ8h28QvQu0hhOnM6BnqxpduIkhtGyfLwAlhRjozF8ZhH8OfxTDI7CEHpYKmdDMDoCQ45Z5grBbIM3ZHoJLyyjGhhCAhbuzKo35HxGM9DPKdpwzmw4r9owYRZUKqnWsIUNWpTzijwPIw35lsIbyEURZ9gWEFQKt2LgDLsihmmFhhxHiiLr6gxfRASVeqnMcCxkOK7KcCAkqBQm84YxpAhwu4EJg2MMt2KG22oM92KCqMcUYSizGF7oVmL4LWiIOGHADSNBQczODW5IHca3Aw/yww0ljhU34C8i3PBD1PCjAsODqOFB3rAnKqgUOC0MNuSOseUBx9zAhrJTKWIyBRumwobggz7Y8FPYcCVuiCvu8ucsbsiVMzQBziU+DB+GD8OHYY0Np8KGU3FD3uR2EXC6G2z4LmwIzrGBDaVyFlfAuQuwIX0xoh1wqSLYUDIenLEXN2ydRAVP4Gw+PE4jGRBW6hs8Trih7II4rMBQdjKFp4HhhnL50Qx48gmRmRE1RAwT/r9Kvojw1xBjKPkiIqoxEIYtQUNEbRsmjy93RMSUtGMM5R5TTMkQxrDDX3p5Ab5lQxo+nYUMUcXeKEOp8wX4XIE2FCpsQ5W1IQ1ljsG4e3rIKug3AcE33BCRhhI/IvKqJfY2As39dBtH5AixhvxnKGxXF/SdGe5c8Cd2gPibXbzV7Gv05TW8IW9RBv7SOsENS84MBv5yHoVhxFcNvcVfsCS5B8w3n1J0xyK5y71jEtxRDI6m4wBPqg1cJPQPRF0jOOqHEPG1e6g6f9Dv3o5EIyPr3kJ9VMQdCu8gM4xoFccE68QFuh5DEeWDeiQTJO2ERReYAhciaiDtZkZ1QYGi4ccftB3paHbhJAv9H8Q993r43PeWslnbE0NnSOy1S/SJNw99d88+plPGnLAV3S8cHVrhFxMR1wyNsPSg7cC2qfS9SzOYOiX3/FPgz0ytktm6XQ/8ghtnVPbFBmPH8lbq2kHq1OVr501guJuZ95D9VXlL09Onef6MZvjVH2s4evuZ4m2/QH/zYa7xW483tuWh8/OHf2MdcYb9xf8DfbWvYp1+el4U7BbntG9/OPuXLPqiuuza5FaMUX6zLGrvRy9pmnZ//nsZ7dvlx6Pb7bhnTI9IhOE/4acj9TccWv/UsqwquK0+OuReKdp26rtcncdS+oZlW7OiT+l+Rl1jd+gfDzM0hIBRvYDuMJQiwWZViKG5df6covlvbCwOAP2MAMPYtoqjd5cDW7XcCfAv6G9YFoxBOQ7Kduz+IRxfw5ZDWHQMfVZjh04UC98n1dOw71asN0/9t9KdxC04ULKBKuBn6FFvOd15LdKjqXuho9+U7WXoWXcx3bl9eCzaeZ6XvaJVPoaAmuDF+8j+vHbiTXFTXopPzbC7ocsco+VtmMaDomdnEKdDaF3c2H2+cTbs4OoRTtu343CVJslLkqSr4fFti7sZ9u08lbkasnTOx7B2DY07Gg7qJvij6LizcDMcyF42dOPkpuhk2KvfL5jh9qC6GE6qVjHiEt1wMOwcqhYxcnCYUcsNI+6u6xjm5bumckOpVrowyotSSg2luyX5Ulo5VWYo2aQURlnOscRQuisbhJI4o91Q9jYzFPvKbzek+hgeL19ww7rPMless43NkP/rHFTYvvJhMQzjJbxgeRUthnXey+Sx9Io2G0q3ScJh7ktvNJTuwIrFWMthNJRtP4PH2MDGZCjby5oCU0bDYCjdB5kCw4nfYFjvI5Mew0FKb8h1zYcXfY5YaxiFsR/N86XNBWkNw5tmLmiPijrD+sbWytDF3nSG0m0t6dCl3TSG4f6E2h9RYxjKqVCH5qRYNAxxsb9RXPaLhlJtdXgo3pgqGIb8FmYU3sSCofQXAagpXB7OGwp8WJSXwmdL84bhRJ9M5KNSecND1QNEk/8KXc5Quv8xB7HVULrTOgdTm6Fks0c+WhbD8OeZjMRiCCgxqyELs2FIcXwbPaNh/RO+bnSNhhId9CRYmAxD33TfmBgMmzGTZiQGwxDDwHrGBsOqx0WI3jCEyhJXRlrD0M++96y0hoeqh0XIVmfYnLUiY6IxbNJreH9IvBnKfe1egneNIX+/XEmORcOWa4uHMDi0C4ZhB/OL9AqGYSa2zYwKhqHmfU1sCoZhJ2SKnAuGTTn9XlnkDaOqR0ROlDNsVz0gcto5Q+mP/fGzzxk2bbG4VUhdDZsTo7mS5AybEiq90c0ZhlslZGKWM2zWySLjmDNs2oJ/+zzN1fBQ9YDIOeQM63mXGcNrzrDq8TDwMAyfh2H45Az5vhVTFd85w+bvS5t/Am5ERds9f4mLW1S/WYq6zMxT1G3KdLPt3jUEYex2XRMehuHzMAyfh2H4/AdXwok+/PcIUwAAAABJRU5ErkJggg==" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading">Dr. Mentor Name <small>JAIPUR</small></h3>
                    <span><strong>Skills: </strong></span>
                        <span class="label label-warning">HTML5/CSS</span>
                        <span class="label label-info">Adobe CS 5.5</span>
                        <span class="label label-info">Microsoft Office</span>
                        <span class="label label-success">Windows XP, Vista, 7</span>
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Bio: </strong><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                    <br>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about Joe</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title">Schedule Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Title</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description" class="control-label">Description</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Start</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">End</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Title</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Description</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">End</dt>
                            <dd id="end" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->

<?php 
$schedules = $conn->query("SELECT * FROM `schedule_list`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($conn)) $conn->close();
?>
</body>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="./js/script.js"></script>

</html>