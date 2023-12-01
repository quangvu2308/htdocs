<body>
    
    
    <div class="head">
        <img src="https://notion-emojis.s3-us-west-2.amazonaws.com/prod/svg-twitter/1f6a7.svg" alt="">
        <h1>Daily Tasks</h1>

    </div>
    <hr>
    
    <table>
        <thead>
            <tr>
                <th style="width: 13%;">
                    <div class="headTable">
                        <i class="material-icons" style="font-size:19px;">done</i>
                        <div>Status</div>
                    </div>
                <th style="width: 30%;">
                    <div class="headTable">
                        <i class="material-icons" style="font-size:19px;">view_day</i>
                        <div>Task name</div>
                    </div>
                </th>
                <th style="width: 15%;">
                    <div class="headTable">
                        <i class="material-icons" style="font-size:19px;">date_range</i>
                        <div>Day</div>
                    </div>
                </th>
                <th style="width: 10%;">
                    <div class="headTable">
                        <i class="material-icons" style="font-size:19px;">label_outline</i>
                        <div>Tags</div>
                    </div>
                </th>
                <th style="width: 10%;">
                    <div class="headTable">
                        <i class="material-icons" style="font-size:19px;">arrow_drop_down_circle</i>
                        <div>Priority</div>
                    </div>
                </th>
                <th class="rightTable">
                    <div class="headTable">
                        <i class="material-icons" style="font-size:19px;">note_add</i>
                        <div>Notes</div>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            foreach($listTodo as $task) {
                extract($task);
                echo '<tr>
                        <td >
                            <div class="statusDone">
                                <div class="dotStatusDone"></div>
                                <div>Done</div>
                            </div>
                        </td>
                        <td><b>'.$task_name.'</b></td>
                        <td>'.$day.'</td>
                        <td>'.$tags.'</td>
                        <td>'.$priority.'</td>
                        <td class="rightTable">'.$notes.'</td>
                    </tr>';
            }
            ?>
        
            <!-- <tr>
                <td >
                    <div class="statusDone">
                        <div class="dotStatusDone"></div>
                        <div>Done</div>
                    </div>
                </td>
                <td><b>Task 1</b></td>
                <td>11/11/2023</td>
                <td>code</td>
                <td></td>
                <td class="rightTable"></td>
            </tr>
            <tr>
                <td>
                    <div class="statusNotStarted">
                        <div class="dotStatusNotStarted"></div>
                        <div>Not started</div>
                    </div>
                </td>
                <td><b>Task 1</b></td>
                <td>11/11/2023</td>
                <td>code</td>
                <td></td>
                <td class="rightTable"></td>
            </tr> -->
        </tbody>
    </table>


    

</body>