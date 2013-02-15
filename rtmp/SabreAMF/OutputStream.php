<?php

    /**
     * SabreAMF_OutputStream 
     *
     * This class provides methods to encode bytes, longs, strings, int's etc. to a binary format
     * 
     * @package SabreAMF 
     * @version $Id$
     * @copyright Copyright (C) 2006-2009 Rooftop Solutions. All rights reserved.
     * @author Evert Pot (http://www.rooftopsolutions.nl/) 
     * @licence http://www.freebsd.org/copyright/license.html  BSD License (4 Clause) 
     */
    class SabreAMF_OutputStream {

        /**
         * rawData 
         * 
         * @var string
         */
        private $rawData = '';
        private $bladata = "";

        /**
         * writeBuffer 
         * 
         * @param string $str 
         * @return void
         */
        public function writeBuffer($str) {
            $this->rawData.=$str;
            $this->asInt();
        }

        /**
         * writeByte 
         * 
         * @param int $byte 
         * @return void
         */
        public function writeByte($byte) {

            $this->rawData.=pack('c',$byte);
$this->asInt();
        }

        /**
         * writeInt 
         * 
         * @param int $int 
         * @return void
         */
        public function writeInt($int) {

            $this->rawData.=pack('n',$int);
$this->asInt();
        }
        
        /**
         * writeDouble 
         * 
         * @param float $double 
         * @return void
         */
        public function writeDouble($double) {

            $bin = pack("d",$double);
            $testEndian = unpack("C*",pack("S*",256));
            $bigEndian = !$testEndian[1]==1;
            if ($bigEndian) $bin = strrev($bin);
            $this->rawData.=$bin;
            $this->asInt();

        }

        /**
         * writeLong 
         * 
         * @param int $long 
         * @return void
         */
        public function writeLong($long) {

            $this->rawData.=pack("N",$long);
$this->asInt();

        }

        /**
         * getRawData 
         * 
         * @return string 
         */
        public function getRawData() {

            return $this->rawData;

        }
        
        public function asInt(){
            $str = "[";
            foreach(str_split($this->rawData) as $k => $v){
                $str .= ord($v) . ", ";
            }
            $str .= "]";
            $this->bladata = $str;
        }


    }



