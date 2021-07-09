<div>
    <div class="flex">
        <div class="text-gray-800 p-1" style="min-width: 150px;" >Địa chỉ</div>
        <div class="flex flex-col w-full space-y-2">  
            <select wire:model="provinceSelected" name="province_id"  class="border-2 border-gray-200 p-2 rounded" >
                <option>Tỉnh / Thành phố</option>
                @foreach ($provinces as $value)
                    <option value="{{ $value['id'] }}">{{ $value['name'] }}</option>
                @endforeach
            </select>  
            <select wire:model="districtSelected" name="district_id" class="border-2 border-gray-200 p-2 rounded" >
                <option selected>Quận / Huyện</option>
                @if(count($districts))
                  @foreach ($districts as $item)
                      <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                  @endforeach
                @endif
            </select>  
            
            <select wire:model="wardSelected" name="ward_id" class="border-2 border-gray-200 p-2 rounded" >
                <option selected>Phường/ Xã</option>
                @if(count($wards))
                    @foreach ($wards as $item)
                        <option value="{{ $item['id']}}">{{ $item['name'] }}</option>
                    @endforeach
                @endif
            </select>
        </div> 
    </div>
</div>
