<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="/forumWebsite/partials/_handleLogin.php" method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">User name</label>
        <input type="text" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp">
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="loginPass" name="loginPass">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>

      </div>
      </form>
    </div>
  </div>
</div>