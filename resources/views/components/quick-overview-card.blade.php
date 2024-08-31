<div class="quickoverview-component">
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <div class="flex quickoverview__top">
        {{-- icon --}}
        <div>
            👋
        </div>
        <div>
            <select name="frequency" id="frequency">
                <option value="month">This Month</option>
                <option value="week">This Week</option>
                <option value="year">This Year</option>
            </select>
        </div>
    </div>
    <div>
        <p class="quickoverview__metric">{{$metric}}</p>
        <p class="quickoverview__metric-title">{{$metricTitle}}</p>
    </div>
</div>