select vehicle_id, vrm, make, model, mileage, sum(cost)
from features
inner join vehicle_features on features.id = vehicle_features.feature_id
inner join vehicles on vehicles.id = vehicle_features.vehicle_id
inner join vehicle_models on vehicle_models.id = vehicles.model_id
inner join vehicle_makes on vehicle_makes.id = vehicles.make_id
group by vehicle_id
having sum(cost) > 1500;
