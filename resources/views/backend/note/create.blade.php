<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
    th{
        text-align: center;
        color: #28a745;
    }
    button{
        margin: 5px;
        height: 40px;
        border-radius: 5px;
    }
</style>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Note Create</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>User_id</th>
                        <td><input style="width: 90%" type="text" name="user_id"></td>
                    </tr>
                    <tr>
                        <th>Category_id</th>
                        <td><input style="width: 90%" type="number" name="category_id"></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input style="width: 90%" type="text" name="description"></td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><input type="file" name="file"></td>
                    </tr>
                    <tr>
                        <a href="{{route('notes.list')}}"><button style="background-color: red" type="button" class="text-white">Back</button></a>
                        <button class="text-dark" style="background-color: yellow" onclick="confirm('Are you sure ???')" type="reset">Reset</button>
                        <button class="text-white" style="background-color: mediumseagreen" type="submit">Add Note</button>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


