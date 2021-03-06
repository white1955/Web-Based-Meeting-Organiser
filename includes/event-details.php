<?php
$currentPage = 'index';
include("includes/header.inc.php");
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
                <li class="active">Event Details</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Event Details</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">Event Title
                    </div>
                    <div class="panel-body event-description">
                        <p>
                            <h3>Event Description</h3><br> The objective of the course is to familiarise participants in the various options available for bone augmentation as well as given the opportunity to perform more complex grafting procedures such as bone augmentation from the chin/ramus area and sinus lift surgery.
                            <br><br> After the course, participants should be able to understand and perform basic techniques with bone grafting. This includes socket preservation and guided bone regeneration, in addition, they will be familiar with harvesting autogenous bone from the jaws.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">Event Info</div>
                    <div class="panel-body event-info">
                        <h3>At a glance...</h3><br>
                        <div><em class="fa fa-calendar-check-o">&nbsp;</em> July 30, 2017</div>
                        <div><em class="fa fa-clock-o">&nbsp;</em> 0900 - 1700</div>
                        <div><em class="fa fa-map-o">&nbsp;</em> Suntec City</div>
                        <div><em class="fa fa-user">&nbsp;</em> Dr Winston</div>
                        <div><em class="fa fa-phone">&nbsp;</em> +65 8765 4321</div>
                        <div><em class="fa fa-envelope-o">&nbsp;</em> contact@events.com</div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.main-->
        <div class="row">
            <div class="col-lg-12">
                <h2>Additional Information</h2>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Participants</a></li>
                            <li><a href="#tab2" data-toggle="tab">Tab 2</a></li>
                            <li><a href="#tab3" data-toggle="tab">Tab 3</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Participants</div>
                                    <div class="panel-body btn-margins">
                                        <div class="col-md-12">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Row</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Email</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>John</td>
                                                        <td>Carter</td>
                                                        <td>johncarter@mail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Peter</td>
                                                        <td>Parker</td>
                                                        <td>peterparker@mail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>John</td>
                                                        <td>Rambo</td>
                                                        <td>johnrambo@mail.com</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-->
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <h4>Tab 2</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor.</p>
                            </div>
                            <div class="tab-pane fade" id="tab3">
                                <h4>Tab 3</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.panel-->
            </div>
            <!--/.col-->
            <div class="col-lg-6 col-md-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">Organiser Settings</div>
                    <div class="panel-body">
                        <h3>Amend this event</h3><br>
                        <button type="button" class="btn btn-md btn-info">Edit</button>
                        <button type="button" class="btn btn-md btn-warning">Modify</button>
                        <button type="button" class="btn btn-md btn-danger">Delete</button>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>

<?php include("includes/footer.inc.php"); ?>
