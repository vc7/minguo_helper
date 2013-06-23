<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_minguo'))
{
    function convert_minguo($year = 1912,$is_to_minguo = TRUE)
    {
    	if(is_numeric($year) && is_bool($is_to_minguo))
    	{
    		$CI =& get_instance();
    		$CI->lang->load('minguo');

    		$temp_year 	= 0;
    		$temp_str	= '';

    		if($is_to_minguo)
    		{
    			$temp_year = $year-1911;

				if($temp_year < 0)
				{
					$temp_str = $CI->lang->line('before_minguo').' '.$temp_year.' '.$CI->lang->line('year');
				}
				else
				{
					$temp_str = $CI->lang->line('after_minguo').' '.$temp_year.' '.$CI->lang->line('year');
				}
    		}
    		else
    		{
    			$temp_year = $year+1911;

    			if($temp_year < 0)
    			{
    				$temp_str = $CI->lang->line('before_christ').' '.$temp_year.' '.$CI->lang->line('year');
    			}
    			else
    			{
					$temp_str = $CI->lang->line('anno_domini').' '.$temp_year.' '.$CI->lang->line('year');
    			}
    		}

    		return $temp_str;
	    }
	    else
	    {
	    	return NULL;
	    }
    }
}

/* End of file minguo_helper.php */
/* Location: ./application/helpers/minguo_helper.php */