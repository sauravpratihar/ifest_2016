 <?php



class crud{
	private $host="localhost";
	private $user="root";
	private $db="ifest";
	private $pass="";
	private $conn;
	
	
	public function __construct(){


		
		$this->conn = new PDO("mysql:host=".$this->tyutyh.";dbname=".$this->db,$this->user,$this->pass);
	}
	// 
	// public function insertData(){
	public function insertData($a,$b,$c,$d,$e,$acc,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$r,$s,$t,$u,$v,$w,$x,$ii){
		// echo "<script>alert('".$ii."');</script>";

		// $conn = mysqli_connect($host, $user, $pass,$db);
		
		// $sql = "INSERT INTO participant(id,uid, name, email, phone, college, ibot, ielectro, irelay, iride, ibiz, blindc, irubble, iapp, treasurehunt, iclash, icube, iintelligence, icrypt, iganith, icapture, imaze, iquize, idatabase, gohunt) VALUES (NULL,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x')";
		$sql = "INSERT INTO `participant` (`uid`, `name`, `email`, `phone`, `college`,`accommodation`, `ibot`, `ielectro`, `irelay`, `iride`, `ibiz`, `blindc`, `irubble`, `iapp`, `treasurehunt`, `iclash`, `icube`, `icrypt`, `iganith`, `icapture`, `imaze`, `iquize`, `idatabase`, `gohunt`, `iintelligence`) VALUES (:a, :b, :c, :d, :e, :acc, :f, :g, :h, :i, :j, :k, :l, :m, :n, :o, :p, :r, :s, :t, :u, :v, :w, :x, :q)";
		// $sql = "INSERT INTO `participant` (`id`, `uid`, `name`, `email`, `phone`, `college`, `ibot`, `ielectro`, `irelay`, `iride`, `ibiz`, `blindc`, `irubble`, `iapp`, `treasurehunt`, `iclash`, `icube`, `iintelligence`, `icrypt`, `iganith`, `icapture`, `imaze`, `iquize`, `idatabase`, `gohunt`) VALUES (NULL, :a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k, :l, :m, :n, :o, :p, :q, :r, :s, :t, :u, :v, :w, :x)";
		//
		$q = $this->conn->prepare($sql);
		// $q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i,':j'=>$j,':k'=>$k,':l'=>$l,':m'=>$m,':n'=>$n,':o'=>$o,':p'=>$p,':q'=>$q,':r'=>$r,':s'=>$s,':t'=>$t,':u'=>$u,':v'=>$v,':w'=>$w,':x'=>$x));
		$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':acc'=>$acc,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i,':j'=>$k,':k'=>$k,':l'=>$l,':m'=>$m,':n'=>$n,':o'=>$o,':p'=>$p,':r'=>$r,':s'=>$s,':t'=>$t,':u'=>$u,':v'=>$v,':w'=>$w,':x'=>$x,':q'=>$ii));

		// $q->execute();

		return true;
	}

	public function events(){
		$sql = "SELECT * FROM events ";

		$q = $this->conn->prepare($sql);

		// $q->execute(array(':name'=>$name));
		$q->execute();
		$data = $q->fetchAll(PDO::FETCH_ASSOC);
 		return $data;

	}


	public function allDay($day){
		$sql = "SELECT * FROM schedule WHERE day=:day ORDER BY start_time ASC";

		$q = $this->conn->prepare($sql);

		$q->execute(array(':day'=>$day));
		// $q->execute();
		$data = $q->fetchAll(PDO::FETCH_ASSOC);
 		return $data;

	}

	// public function alltime($day){
	// 	$sql = "SELECT * FROM schedule WHERE day=:day ORDER BY start_time ASC";

	// 	$q = $this->conn->prepare($sql);

	// 	$q->execute(array(':day'=>$day));
	// 	// $q->execute();
	// 	$data = $q->fetchAll(PDO::FETCH_ASSOC);
 // 		return $data;

	// }

	public function ts(){
		$sql = "SELECT * FROM schedule";

		$q = $this->conn->prepare($sql);

		// $q->execute(array(':name'=>$name));
		$q->execute();
		$d = $q->rowCount();
 		return $d;

	}
	
	


}

?>