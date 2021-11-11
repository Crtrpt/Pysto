

import { ViewGridIcon,ViewListIcon,SearchIcon, DatabaseIcon, ClockIcon, HashtagIcon, DeviceMobileIcon, CubeTransparentIcon } from '@heroicons/react/solid'
import Link from "next/link";
export default function ProductListView({
  list
}) {
  return (
    <div className="flex flex-row flex-wrap">
      {list.map((d)=>{
      
        return  <Link href={`/product/${encodeURIComponent(d.id)}`} key={d.id}>
        <div className="w-60  border-2 border-opacity-0  bg-gray-100  p-1 m-1
            hover:border-gray-700 hover:border-opacity-1 text-xs  cursor-pointer rounded
            " >
                        <div> {d.name}</div>
                        <div className="flex"><ViewGridIcon className="w-4"/>
                        {d.model_count}</div>
                        <div className="flex">
                        <CubeTransparentIcon className="w-4"/>{d.device_count}</div>
                </div></Link>
      })}

    </div>
  )
}


