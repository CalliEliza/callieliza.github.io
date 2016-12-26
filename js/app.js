/**
 * Created by callie on 6/17/15.
 */
$(document).ready(function() {
    $("#rock").click(function() {
        player_choice = "rock";
        rpsls(player_choice);
    });
    $("#paper").click(function() {
        player_choice = "paper";
        rpsls("paper");
    });
    $("#scissors").click(function() {
        player_num = "scissors";
        rpsls("scissors");
    });
    $("#Spock").click(function() {
        player_choice = "Spock";
        rpsls("Spock");
    });
    $("#lizard").click(function() {
        player_choice = "lizard";
        rpsls("lizard");
    });

    // reset gameArea
    $("#reset").click(function() {
        $("#gameArea").empty();
        $("#Playerch").empty();
        $("#ComputerCh").empty();
    });
});

