import React from 'react'
import { FaFacebook } from "react-icons/fa";
import { FaInstagramSquare } from "react-icons/fa";

const Footer = () => {
  return (
    <footer className='bg-slate-200'>
      <div className='container mx-auto px-4 py-8'>  <p className='text-center font-bold text-xl'>Tiem hoa tuoi tai Da Nang</p>  <div className='flex justify-center mt-4'>  <div className='mr-4'>  <p><strong>ADDRESS:</strong> 11 Mỹ An 25, Phường Mỹ An, Quận Ngũ Hành Sơn, Da Nang, Vietnam</p>
          </div>
          <div className='mr-4'>
            <p><strong>TELEPHONE:</strong> 0898.232.039 - 032.66.77.144</p>
          </div>
          <div>
            <p><strong>EMAIL:</strong> cosy.florist@gmail.com</p>
          </div>
        </div>

        <div className='flex justify-center mt-8'>  <a href='https://www.facebook.com/CosyFloristHoaTuoiDaNang' target='_blank' rel='noreferrer'>
            <FaFacebook className='text-2xl mx-4 hover:text-blue-500' />  </a>
          <a href='https://www.instagram.com/cosy_florist/' target='_blank' rel='noreferrer'>
            <FaInstagramSquare className='text-2xl mx-4 hover:text-pink-500' />  </a>
        </div>
      </div>
    </footer>
  )
}

export default Footer
