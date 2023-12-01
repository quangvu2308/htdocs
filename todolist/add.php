<button class="open-button" onclick="openAddTask()">Add task</button>

    <div class="form-popup" id="myForm">
        <form action="addTask.php" method="post"  class="form-container">
            <h1>Add task</h1>

            <label for="taskName">Task name</label>
            <input type="text" placeholder="Enter task name" name="taskName">

            <label for="day">Day</label>
            <input type="text" name="day">

            <label for="tag">Tag</label>
            <input type="text" name="tag">

            <label for="priority">Priority</label>
            <input type="text" name="priority">

            <label for="note">Note</label>
            <input type="text" name="note" placeholder="Enter note">

            <button type="submit" name="themmoi" value="themmoi" >Add</button>
            <!-- <button type="button"  onclick="closeAddTask()">Close</button> -->
        </form>

        <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
    </div>

    <!-- <script>
        function openAddTask() {
          document.getElementById("myForm").style.display = "block";
        }
        
        function closeAddTask() {
          document.getElementById("myForm").style.display = "none";
        }
        </script> -->