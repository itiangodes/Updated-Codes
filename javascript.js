<script>
    function validateForm() {
      var name = document.getElementById("name").value.trim();
      var coffee = document.getElementById("coffee").value;

      if (name === "" || coffee === "") {
        alert("Please fill in all required fields.");
        return false;
      }
      return true;
      <form onsubmit="return submitOrder(event)">
      return true;
      </form>
    
</script>