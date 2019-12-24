<!-- Footer -->
<footer class="main">
	&copy; 2018 <strong> <?php echo $this->db->get_where('settings' , array('type'=>'system_name'))->row()->description; ?> | Version 0.1</strong>
    Developed by
	<a href="http://www.cassiopeia-tech.ml"
    	target="_blank">Cassiopeia Technologies</a>
</footer>
