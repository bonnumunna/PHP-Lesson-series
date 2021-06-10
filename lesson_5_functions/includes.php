<?php
    /*
        ====================== PHP SSI INCLUDES =======================
        Server Side Includes are built in functions that enables us
        to link resources as part of a page/document. It could be from
        the local storage,server or external source.
        1. include()
            Includes a resource without due attention to whether it is
            already present. This may result in PHP warning.
        2. include_once()
            Includes a resource only once. If already present, it ignores
            the command.
        3. require()
            The page will not load if the required resource is not present.
        4. require_once()
            Requires a resource only once. If present, the command is ignored.
    */
    // include "./inc/top.php";

    include_once("./inc/top.php");
?>
            <!-- CUT OFF HEAD FROM THIS POINT UPWARD -->
            <div class="row justify-content-center">
                <div class="col-7">
                    <div class="card">
                        <div class="card-header text-center">
                            <p>PHP INCLUDES</p>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="text">Text</label>
                                    <input type="text" name="" id="text" class="form-control" placeholder="enter text">
                                </div>
                                <hr>
                                <input type="submit" value="SUBMIT" class="btn btn-outline-primary">
                            </form>
                        </div>
                        <div class="card-footer text-center text-dark">
                            <small>&copf; 2022</small>
                        </div>
                    </div>

                </div>
            </div>
            <!-- CUT OFF FOOT FROM THIS POINT DOWNWARD -->
<?php
    include_once("./inc/bottom.php")
?>