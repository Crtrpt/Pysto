

import { ViewGridIcon,ViewListIcon,SearchIcon, DatabaseIcon, ClockIcon, HashtagIcon, DeviceMobileIcon } from '@heroicons/react/solid'
import Link from "next/link";
export default function DeviceListView({
  list
}) {
  return (
    <div className="flex flex-row flex-wrap">
      {list.map((d)=>{
      
        return  <Link href={`/device/${encodeURIComponent(d.id)}`} key={d.id}>
        <div className="w-60  border-2 border-opacity-0  bg-gradient-to-r from-green-600  to-green-500 p-1 m-1
            hover:border-gray-700 hover:border-opacity-1 text-xs  cursor-pointer rounded
            " >
                        <div>名称:{d.name}</div>
                        <div className="flex"><ViewGridIcon className="w-4"/>
                        {d.product_name}</div>
                        <div className="flex">
                        <DeviceMobileIcon className="w-4"/>
                        {d.model_name}</div>
                        <div className="flex">
                          <HashtagIcon className="w-4"/>{d.last_event}</div>
                        <div className="flex ">
                          <ClockIcon className="w-4"/>{d.last_time}</div>
                </div></Link>
      })}

    </div>
  )
}


