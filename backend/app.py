from responses import *
from flask import Flask
from flask_restful import reqparse, abort, Api, Resource
from flask_cors import CORS, cross_origin

app = Flask(__name__)
api = Api(app)
cors = CORS(app)

app.config['CORS_HEADERS'] = 'Content-Type'



api.add_resource(bonistas, '/api/arg/bonistas/<panel_id>')
api.add_resource(BCRA, '/api/arg/bcra')

api.add_resource(ALUA, '/api/arg/ALUA')


api.add_resource(dolarHoy, '/api/arg/dolarHoy')
api.add_resource(mep, '/api/arg/mep/<settlement_id>')
api.add_resource(ccl, '/api/arg/ccl/cedear')

api.add_resource(options, '/api/arg/options')
api.add_resource(options_filtered, '/api/arg/options/<underlying>')

api.add_resource(options_strategies, '/api/arg/options/<underlying>/<strategy>')

api.add_resource(argy_quots,'/api/arg/<panel_id>/<settlement_id>')

api.add_resource(indices, '/api/arg/indices')


if __name__ == '__main__':
    app.run(threaded=True,host='0.0.0.0')
