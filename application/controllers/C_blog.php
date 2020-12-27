<?php
     Class C_blog extends CI_Controller{

        
        public function index(){         
            $this->load->view('v_blogAwal');           
        }

        public function profil(){         
            $this->load->view('v_profil');           
        }

        public function pengertian(){         
            $this->load->view('v_pengertian');           
        }

        public function sejarah(){         
            $this->load->view('v_sejarah');           
        }

        public function manfaat(){         
            $this->load->view('v_manfaat');           
        }

        public function cara(){         
            $this->load->view('v_cara');           
        }

        public function unsur(){         
            $this->load->view('v_unsur');           
        }

        public function penerapan(){         
            $this->load->view('v_contoh');           
        }


}
?>