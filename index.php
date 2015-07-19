<body>
    <div class="container">
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
        </header>
        <main>
            <h1>
                CHOOSE YOUR TIME FRAME
            </h1>
            <p class="p1">Enter your time in the boxes and press Calculate to get the time frame. Then press Start Countdown to start counting down.</p>

            <div class="timeInputs">
                <div class="sch_time">
                    <p class="headline">Time Scheduler</p>
                    <p>Appointment time:</p>

                    <p>Time you must leave: <br>
                        (include drive time in number)</p>
                    <p>Count down to leave time:</p>
                </div>
                <div class="inputs">
                    <table>
                        <tbody>
                            <tr>
                                <th>Hours</th>
                                <th>Minutes</th>
                            </tr>
                            <tr>
                                <td><input type="text" id="arriveH" size="2"></td>
                                <td><input type="text" id="arriveM" size="2"></td>
                            </tr>
                            <tr>
                                <td><input type="text" id="leaveH" size="2"></td>
                                <td><input type="text" id="leaveM" size="2"></td>   
                            </tr>
                            <tr>
                                <td><input id="r1" readonly="readonly" size="2" /></td>
                                <td><input id="r2" readonly="readonly" size="2"/></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="clearfloat"></div>
            <div class="calculate caption" onclick="calculate()">Calculate</div>
            <div class="calculate caption" onclick="getTimer()">Start Coundown</div>
            <div class="clearfloat"></div>
            <div class="timeframes">
                <div class="button caption">Starting Time</div>
                <div class="firstTime display">Starting Time</div><br>
                <div class="button1 caption">Halfway Point</div>
                <div class="halfWayTime display">Halfway Point</div><br>
                <div class="button2 caption">10 MINS EARLY</div>
                <div class="tenMinutesTime display">10 min time</div><br>
                <div class="button3 caption">5 MINS EARLY</div>
                <div class="fiveMinutesTime display">5 min time</div><br>
                <div class="button5 caption">LEAVE NOW!!</div>
                <div class="leaveTime display">Leave time</div><br>
            </div>
            <div class="clearfloat"></div>


        </main>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
        </footer>
    </div>
</body>




