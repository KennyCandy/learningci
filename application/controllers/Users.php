<?php



Class Users extends CI_Controller {

    public function index() {

//        $this->load->library( 'doctrine' );
        $this->load->model( 'User' );
        // Get EntityManager Instance
        $em = $this->doctrine->em;
        // Working with my User entity for insert
        $user = new User();
        $user->setUsername( 'trinht22cirnh' );
        $user->setPassword( '1asdasdasd32' );
        $user->setFullname( 'trinh' );
        $user->setSex( '1' );
        $user->setBirthday( '1992-01-01' );
        $user->setAddress( '132sadddaxcxsdasd sdasd' );
        $user->setEmail( '13@sxcxdddccasd.cshaicsj' );
        $user->setStatus( '1' );
        $user->setGroupId( '1' );

        $em->persist( $user );
        $em->flush();
    }

    public function addUser() {
//        $this->load->library( 'doctrine' );
        $this->load->model( 'User' );

        $em = $this->doctrine->em;
        echo '<pre>';
        echo '$em : <br>';
        print_r($em);
        echo '</pre>';
        die;
//        echo '<pre>';
//        echo '$em : <br>';
//        print_r($em);
//        echo '</pre>';
////        die;
        // Working with my User entity for insert
        $user = new User();
        $user->setUsername( 'trinhtss22cirnh' );
        $user->setPassword( '1asdasdasxcxd32' );
        $user->setFullname( 'trxcxinh' );
        $user->setSex( '1' );
        $user->setBirthday( '1992-01-01' );
        $user->setAddress( '132sadaxxcssxsdasd sdasd' );
        $user->setEmail( '13@sxcddxdxxccasd.cshaicsj' );
        $user->setStatus( '1' );
        $user->setGroupId( '1' );
        $em->persist( $user );
        $em->flush();
    }

    public function deleteUser() {

    }

    public function updateUser() {

    }
}