 mysqli_query($connection,"select * from postingsenderreserved where Jobtitle='$cate'") or die(mysqli_error());        
          $count = mysqli_num_rows($count_query);
          
                    ?>
					
					
					
                    <?php echo $count; ?></td>
					
					
					
				
		  
		  		<!--	
				
				select * from tomemorandum where Subject_identity='$Subject_identity' ORDER BY status='Posted'
				
				
				select * from tomemorandum where Status='Unposted' ORDER BY Subject_identity='2'    -->
		  
		  
		  
		  	     <!--td style="text-align:center;"><?php
		     include('connect.php');
          $Subject_identity=$row['Subject_identity'];
                    $count_query = mysql_query("select * from tomemorandum where Subject_identity='1' ORDER BY status='Unposted'") or die(mysql_error());        
          $count = mysql_num_rows($count_query);
          
                    ?>
					
					
					
                    <?php echo $count; ?></td-->
		  
		  
		  
		  
		  
		  
	
		  <!-- Twoo Piece chiecken -->
		  
		  
		  
		  
		  
		  
		  
		  
        <td width="140" style="text-align:center; width:15%;">
                <a  rel="tooltip"  title="View" id="v<?php echo $id; ?>"  href="onginternalreserved.php?id=<?php echo $row['Jobtitle'];?>" class="btn btn-primary button button4">View Applicant Reserved/CV<?php echo $row7[classname];?>&nbsp;<i class="icon-list icon-large"></i></a>
           </td>
      </tr>
      <?php } ?>
                                </tbody>
                            </table>

		
    <!-- /#wrapper -->										 
												 
												 
												 
												 
												 














      </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  		
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	  $('#example').dataTable();
	});
    </script>
	  
	  
	  
	  
	  
        <script src="../js/jquery/jquery-2.2.4.min.js"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script>
        <script src="../js/pace/pace.min.js"></script>
        <script src="../js/lobipanel/lobipanel.min.js"></script>
        <script src="../js/iscroll/iscroll.js"></script>
        <script src="../js/prism/prism.js"></script>
        <script src="../js/DataTables/datatables.min.js"></script>
        <script src="../js/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>
		 <script>
   
    $(document).ready(function() {
        $('#logical').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script-->
		
    </body>
</html>


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      }, {
    key: 'onDurationChange',
    value: function onDurationChange() {
      if (this.adVideoPlayer && this.adVideoPlayer.readyState() > 0) {
        this.videoDuration = this.adVideoPlayer.duration();
        this.sendDurationUpdate(this.videoDuration);
      }
    }

    /* @return {boolean} */

  }, {
    key: 'verifyDomain',


    /* @return {boolean} */
    value: function verifyDomain(domain) {
      //match mac or windows web-vui app domain
      return !!this.origin.match(domain);
    }

    /* @return {undefined} */

  }, {
    key: 'sendMessage',
    value: function sendMessage(data) {
      if (data && this.source && this.origin) {
        data.type = this.adType();
        this.source.postMessage(JSON.stringify(data), this.origin);
      }
    }
  }, {
    key: 'sendFollowUp',
    value: function sendFollowUp(data) {
      data.commandRecieved = data.command;
      delete data.command;
      this.sendMessage(data);
    }

    /* @return {undefined} */

  }, {
    key: 'mute',
    value: function mute(data) {
      if (this.adVideoPlayer) {
        this.lastVolume = this.adVideoPlayer.volume();
        this.adVideoPlayer.volume(0);
      }
      this.sendFollowUp(data);
    }

    /* @return {undefined} */

  }, {
    key: 'setUpSoundController',
    value: function setUpSoundController() {}
    // Override this to nothing to prevent AdPlayer from controlling
    // sound on moouse over.


    /* @return {undefined} */

  }, {
    key: 'unmute',
    value: function unmute(data) {
      if (this.adVideoPlayer) {
        this.adVideoPlayer.volume(this.lastVolume || 1);
      }
      this.sendFollowUp(data);
    }
  }, {
    key: 'setTimeUpdate',
    value: function setTimeUpdate() {
      var self = this;
      this.adVideoPlayer.on('timeupdate', function () {
        self.sendTimeupdate(self.adVideoPlayer.currentTime());
      });
    }

    /* @return {undefined} */

  }, {
    key: 'setVolume',
    value: function setVolume(data) {
      if (this.adVideoPlayer) {
        this.adVideoPlayer.volume(data.volume);
        data.volume = this.adVideoPlayer.volume() || 0;
        this.lastVolume = data.volume;
      }
      this.sendFollowUp(data);
    }

    /* @return {undefined} */

  }, {
    key: 'play',
    value: function play(data) {
      if (this.adVideoPlayer) {
        this.adVideoPlayer.play();
        data.play = !this.adVideoPlayer.paused();
      }
      this.sendFollowUp(data);
    }

    /* @return {undefined} */

  }, {
    key: 'pause',
    value: function pause(data) {
      if (this.adVideoPlayer) {
        this.adVideoPlayer.pause();
        data.pause = this.adVideoPlayer.paused();
      }
      this.sendFollowUp(data);
    }

    /* @return {undefined} */

  }, {
    key: 'getDuration',
    value: function getDuration(data) {
      data.duration = this.videoDuration;
      this.sendFollowUp(data);
    }

    /* @return {undefined} */

  }, {
    key: 'sendTimeupdate',
    value: function sendTimeupdate(currentTime) {
      this.sendMessage({
        eventName: 'timeupdate',
        event: true,
        time: currentTime
      });
    }
  }, {
    key: 'sendDurationUpdate',
    value: function sendDurationUpdate(duration) {
      this.sendMessage({
        eventName: 'durationUpdate',
        event: true,
        duration: duration
      });
    }

    /* @return {undefined} */

  }, {
    key: 'respondToMessage',
    value: function respondToMessage(e) {
      if (this.verifyDomain(e.origin)) {
        var data;
        var err;
        try {
          data = JSON.parse(e.data);
        } catch (err) {
          err = JSON.stringify(err);
          data = {
            status: 'error',
            error: err,
            dataRecieved: e.data
          };
          this.sendMessage(data);
        }
        if (!data || data.type === 'html') {
          return;
        }
        if (data.command) {
          this[data.command](data);
        }
      }
    }
  }, {
    key: 'sendEventToClient',
    value: function sendEventToClient(eventName) {
      console.log(eventName);
      this.sendMessage({
        eventName: eventName,
        event: true
      });
    }
  }, {
    key: 'disposeAdPlayer',
    value: function disposeAdPlayer() {
      if (this.adVideoPlayer) {
        console.log("dispose WebAdPlayer");
        window.removeEventListener("message", this.responseMsg, false);
        var container = this.getContainingElement();
        if (container) container.removeEventListener('durationchange', this.onDurationChange.bind(this));
        _get(WebAdPlayer.prototype.__proto__ || Object.getPrototypeOf(WebAdPlayer.prototype), 'disposeAdPlayer', this).call(this);
      }
    }
  }], [{
    key: 'isMac',
    value: function isMac() {
      return navigator.appVersion.indexOf('Mac') > 0;
    }
  }]);

  return WebAdPlayer;
}(AdPlayerAPI);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     